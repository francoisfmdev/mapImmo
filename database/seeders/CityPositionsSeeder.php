<?php

namespace Database\Seeders;

use App\Models\CityPosition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CityPositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CityPosition::create([
            
            'city' => 'Nice',
            'latitude' => '43.7009358',       
            'longitude' => '7.2683912',  
        ]);
        CityPosition::create([
            
            'city' => 'Cagnes-sur-Mer',
            'latitude' => '43.6612012',       
            'longitude' => '7.1513834',   
        ]);
        CityPosition::create([
            
            'city' => 'Saint-Jean-Cap-Ferrat',
            'latitude' => '43.6899651',       
            'longitude' => '7.3327399',   
        ]);
        CityPosition::create([
            
            'city' =>'Antibes',
            'latitude'=>'43.5812868',       
            'longitude'=>'7.1262071',   
        ]);
        CityPosition::create([
            
            'city' => 'Villeneuve-Loubet',
            'latitude' => '43.6579947',       
            'longitude' => '7.1217592',   
        ]);
    }
}
