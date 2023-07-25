<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Core\Number;

use App\Models\Properties;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityPositionController;
use App\Models\CityPosition;

class PropertyController extends Controller
{

    public function index_property()
    {

        $user = Auth::user();




        // Si l'utilisateur a le rôle d'administrateur, récupérer tous les biens
        // $properties = Properties::orderBy('id')->get();

        // Sinon, récupérer uniquement les biens de l'utilisateur connecté
        $properties = $user->user_properties()->orderBy('id')->get();

        return view('properties.index', compact('properties'));
    }

    public function index_admin_property()
    {

        $user = Auth::user();
        $properties = $user->user_properties()->orderBy('id')->get();
        $scis = User::all();

        // dd($properties);

        return view('properties.adminIndex', compact(
            'properties',
            'scis'
        ));
    }


    public function getPropertiesBySci(Request $req)
    //get all propertiesData
    {
        // Récupérer les biens associés au SCI
        $sci = $req->input('sci');
        $user = User::find($sci);
        $properties = $user->user_properties()->orderBy('id')->get();
        $scis = User::all();
        // $properties = DB::table('properties')
        //     ->join('users', 'properties.user_id', '=', 'users.id')
        //     ->where('users.id', $sci)
        //     ->select('properties.*')
        //     ->get();

        // dd($req->input('sci'));
        // Retourner les biens sous forme de JSON
        return view('properties.adminIndex', compact('properties', 'scis'));
    }
    public function getAllPropertiesData(Request $req)
    {
        // Récupérer tous les utilisateurs avec leurs propriétés et adresses
        $usersWithPropertiesAndAddresses = User::with('user_properties_with_addresses')->get();
        $cities = CityPosition::all();
        // Retourner les données au format JSON
        return response()->json([$usersWithPropertiesAndAddresses , $cities]);
    }



    public function new_property()
    {
        $user = Auth::user(); // Récupérer l'utilisateur connecté
        return view('properties.new', ['user' => $user]);
    }

    public function new_property_treatment(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'nom' => 'required',
            'streetNumber' => 'required',
            'streetName' => 'required',
            'postalCode' => 'required',
            'city' => 'required',
            'lon' => 'required',
            'lat' => 'required',
        ]);

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
            $properties->save();

            $city = $request->input('city');
            

            $cityPositionController = new CityPositionController();
            $cityPositionController->addCityIfNotExists($city);
        }

        // façon officielle d'utiliser compact()
        return redirect('/properties/new')->with('status', 'Bien ajouté avec succès');
    }



    public function update_property($id)
    {
        $properties = Properties::find($id);
        return view('properties.update', compact('properties'));
    }

    public function update_property_treatment(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'nom' => 'required',
        ]);
        $properties = Properties::find($request->id);
        $properties->type = $request->input('type');
        $properties->update();

        return redirect('/properties')->with('status', 'Bien modifié avec succès');
    }

    public function delete_property($id)
    {
        $properties = Properties::find($id);
        $properties->delete();

        return redirect('/properties')->with('status', 'Bien supprimé avec succès');
    }
}

 //utiliser CityPositionCOntroller avec une méthode qui permet de savoir si la ville de l'address de la request 
        //si la ville existe deja dans la base alors il se passse rien
        //si la ville n'existe pas j'utilise les coodonnées de la 
