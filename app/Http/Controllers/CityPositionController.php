<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityPositionController extends Controller
{
    public function addCityIfNotExists($city)
    {
        // Vérifier si la ville existe déjà dans la table city_positions
        $cityPosition = DB::table('city_positions')
            ->where('city', $city)
            ->first();
    
        if (!$cityPosition) {
            // Si la ville n'existe pas, utiliser la méthode getGeocodedAddress pour récupérer les coordonnées de la ville
            $client = new Client();
            $response = $client->get('https://nominatim.openstreetmap.org/search', [
                'query' => [
                    'format' => 'json',
                    'q' => urlencode($city),
                ],
            ]);
    
            $data = json_decode($response->getBody(), true);
    
            if (!empty($data)) {
                $result = $data[0];
                $latitude = $result['lat'];
                $longitude = $result['lon'];
    
                // Enregistrer les coordonnées de la ville dans la table city_positions
                DB::table('city_positions')->insert([
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'city' => $city,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
