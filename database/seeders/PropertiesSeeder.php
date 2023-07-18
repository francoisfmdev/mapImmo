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
            'nom' => 'Raim',
            'type' => 'T2',
            'nom' => 'Raim',
            'users_id' => '1',
            'address_id' => '1',
            
        ]);

        Properties::create([
            'nom' => 'Raim',
            'type' => 'T3',
            'nom' => 'Raim',
            'users_id' => '2',
            'address_id' => '1',
            
        ]);
    }
    
}
