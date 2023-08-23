<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Core\Number;

use App\Models\Address;
use App\Models\Properties;
use App\Models\CityPosition;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityPositionController;

class PropertyController extends Controller
{

    public function index_property()
    {

        $user = Auth::user();
        $userColor = $user->color;
        $properties = $user->user_properties()->orderBy('id')->get();


        return view('properties.index', compact(
            'properties',
            'user',
            'userColor'
        ));
    }

    public function index_admin_property()
    {

        $user = Auth::user();
        $properties = $user->user_properties()->orderBy('id')->get();
        $scis = User::all();
        $userColor = $user->color;

        // dd($scis);

        return view('properties.adminIndex', compact(
            'properties',
            'scis',
            'userColor',
            'user'
        ));
    }


    public function getPropertiesBySci(Request $req)
    {
        // Récupérer les biens associés au SCI
        $sci = $req->input('sci');
        $user = User::with('user_properties')->find($sci);
        $properties = $user->user_properties()->orderBy('id')->get();
        $scis = User::all();

        // Récupérer la couleur de l'utilisateur en fonction de la SCI sélectionnée
        // Assurez-vous d'avoir une colonne "color" dans votre table "users" pour stocker la couleur de chaque utilisateur
        $userColor = $user->color ?? null;

        return view('properties.adminIndex', compact('properties', 'scis', 'userColor'));
    }


    public function getAllPropertiesData()
    {
        // Récupérer tous les utilisateurs avec leurs propriétés et adresses
        $usersWithPropertiesAndAddresses = User::with('user_properties_with_addresses')
            // ->orderBy('nom') // ou un autre champ de tri pour les utilisateurs SCI
            ->get();
            $cities = CityPosition::all()->toArray();

            // Trier les villes en plaçant "Nice" en premier et en triant alphabétiquement
            usort($cities, function ($city1, $city2) {
                if ($city1['city'] === 'Nice') {
                    return -1; // "Nice" en premier
                } elseif ($city2['city'] === 'Nice') {
                    return 1; // "Nice" en premier
                }
                return strcasecmp($city1['city'], $city2['city']); // Tri alphabétique
            });
        
        // Retourner les données au format JSON
        return response()->json([$usersWithPropertiesAndAddresses, $cities]);
    }





    public function new_property(Request $request)
    {
        $user = Auth::user(); // Récupérer l'utilisateur connecté
        $userColor = $user->color;

        $selectedSciId = $request->input('sci');

        // Récupérer les informations de l'utilisateur sélectionné à partir de son ID
        $selectedSci = User::find($selectedSciId);

        // Récupérer les SCI de l'utilisateur connecté
        $scis = User::all();



        return view('properties.new', compact('user', 'userColor', 'scis', 'selectedSci'));
    }

    public function new_property_treatment(Request $request)
    {
       
        
            
            // dd($request->all());
            $request->validate([
                'type' => 'required',
                'nom' => 'required',
                'fullAddress' => 'required',
                'lon' => 'required',
                'lat' => 'required',
                // 'city' => 'required'
                // 'lonNH' => 'required',
                // 'latNH' => 'required',


            ]);

            $sciId = $request->input('sci_id');
            $user = Auth::user(); // Definir que user-> estcelui de connecté

            //
            $addressController = new AddressController();
            $addressController->new_address($request);
            $address = $addressController->get_one_address($request);
            $address_id = null;


            foreach ($address as $addres) {
                $address_id = $addres->id;
                $properties = new Properties();
                
                $properties->type = $request->input('type');
                $properties->nom = $request->input('nom');
                $properties->user_id = $user->id; //Ajour de l'ID de l'utilisateur connecté
                $properties->address_id = $addres->id; //Ajour de l'ID de l'utilisateur connecté         
                $properties->user_id = $sciId;
                $address = $request->input('fullAddress');
                $primitivWords = explode(',', $address);
                $city = trim($primitivWords[1]);
                $properties->address_id = $addres->id;
               
                $properties->save();




                $cityPositionController = new CityPositionController();
                $cityPositionController->addCityIfNotExists($city);
            }


            return redirect('/index')->with('status', 'Bien ajouté avec succès');
      
    }



    public function update_property($id, Request $request)
    {
        $properties = Properties::find($id);
        $address = $properties->address;

        // Récupérer l'utilisateur associé à la propriété
        $selectedSci = $properties->user;

        $userColor = $selectedSci ? $selectedSci->color : null;

        // Le reste du code reste inchangé...
        $scis = User::all();
        return view('properties.update', compact('properties', 'address', 'userColor', 'scis', 'selectedSci'));
    }

    public function update_property_treatment(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'nom' => 'required',
            'fullAddress' => 'required',
            'lat' => 'required',
            'lon' => 'required',
            'city' => 'required'
        ]);
    
        $idPropriete = $request->input('property_id');
        $propriete = Properties::find($idPropriete);
    
        if (!$propriete) {
            return redirect('/properties')->with('error', 'Propriété introuvable.');
        }
    
        $controllerAdresse = new AddressController();
        $controllerAdresse->new_address($request);
    
        $adresse = $controllerAdresse->get_one_address($request);
        $idAdresse = null;
    
        foreach ($adresse as $adr) {
            $idAdresse = $adr->id;
            $propriete->type = $request->input('type');
            $propriete->nom = $request->input('nom');
            $propriete->address_id = $adr->id;
            $propriete->save();
    
            $ville = $request->input('city');
    
            $controllerPositionVille = new CityPositionController();
            $controllerPositionVille->addCityIfNotExists($ville);
        }
    
        return redirect('/index')->with('status', 'Propriété modifiée avec succès');
    }

    public function delete_property($id)
    {
        $properties = Properties::find($id);
        $properties->delete();

        return redirect('/index')->with('status', 'Bien supprimé avec succès');
    }

    private function determineZomm(String $city)
    {
        if ($city === 'Nice') {
            return 16;
        } else {
            return 15;
        }
    }
}
