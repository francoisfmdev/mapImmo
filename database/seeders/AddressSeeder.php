<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            
            'streetNumber' => '2',
            'streetName' => 'Bd Raimbaldi',
            'postalCode' => '06000',
            'city' => 'Nice',
            'nbPropertyAddress' => 2,
            
        ]);

        Address::create([
            
            'streetNumber' => '3',
            'streetName' => 'Bd Raimbaldi',
            'postalCode' => '06000',
            'city' => 'Nice',
            'nbPropertyAddress' => 1,
            
        ]);

        
    }
}
