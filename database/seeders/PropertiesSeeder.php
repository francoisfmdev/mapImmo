<?php

namespace Database\Seeders;


use App\Models\Properties;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Properties::create([
            'nom' => 'Raim1',
            'type' => 'T1',
            
            'user_id' => '1',
            'address_id' => '1',
            
        ]);

        Properties::create([
            'nom' => 'Raim2',
            'type' => 'T2',
            
            'user_id' => '2',
            'address_id' => '2',
            
        ]);
        Properties::create([
            'nom' => 'Raim3',
            'type' => 'T3',
            
            'user_id' => '3',
            'address_id' => '3',
            
        ]);
        Properties::create([
            'nom' => 'Raim4',
            'type' => 'T4',
            
            'user_id' => '1',
            'address_id' => '4',
            
        ]);
        Properties::create([
            'nom' => 'Raim5',
            'type' => 'T5',
            
            'user_id' => '2',
            'address_id' => '5',
            
        ]);
        Properties::create([
            'nom' => 'Raim6',
            'type' => 'Garage',
            
            'user_id' => '3',
            'address_id' => '6',
            
        ]);
        Properties::create([
            'nom' => 'Raim7',
            'type' => 'T1',
            
            'user_id' => '1',
            'address_id' => '7',
            
        ]);
        Properties::create([
            'nom' => 'Raim8',
            'type' => 'T2',
            
            'user_id' => '2',
            'address_id' => '8',
            
        ]);
        Properties::create([
            'nom' => 'Raim9',
            'type' => 'T4',
            
            'user_id' => '3',
            'address_id' => '9',
            
        ]);
        Properties::create([
            'nom' => 'Raim10',
            'type' => 'T5',
            
            'user_id' => '1',
            'address_id' => '10',
            
        ]);
        Properties::create([
            'nom' => 'Raim11',
            'type' => 'Garage',
            
            'user_id' => '2',
            'address_id' => '11',
            
        ]);
        Properties::create([
            'nom' => 'Raim12',
            'type' => 'T3',
            
            'user_id' => '3',
            'address_id' => '12',
            
        ]);
        Properties::create([
            'nom' => 'Raim13',
            'type' => 'T4',
            
            'user_id' => '1',
            'address_id' => '13',
            
        ]);
        Properties::create([
            'nom' => 'Raim15',
            'type' => 'T5',
            
            'user_id' => '2',
            'address_id' => '14',
            
        ]);
        Properties::create([
            'nom' => 'Raim15',
            'type' => 'Garage',
            
            'user_id' => '3',
            'address_id' => '15',
            
        ]);
        
        
    }
    
}
