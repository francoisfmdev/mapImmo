<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use PhpParser\Builder\Property;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer la première SCI
        User::create([
            'name' => 'SCI 1',
            'email' => 'sci1@example.com',
            'password' => Hash::make('Azerty06!'),
            'address' => 'Adresse SCI 1',
            'color' => '#300000',
            'nbOfProperty' => 2,
            'revenue1' => 300000,
            'revenue2' => 400000,
            'revenue3' => 500000,
            'date_creation' => "2006-12-12",
            'role' => "admin",
        ]);

        // Créer la deuxième SCI
        User::create([
            'name' => 'SCI 2',
            'email' => 'sci2@example.com',
            'password' => Hash::make('Azerty06!'),
            'address' => 'Adresse SCI 2',
            'color' => '#FF0000',
            'nbOfProperty' => 0,
            'revenue1' => 300000,
            'revenue2' => 400000,
            'revenue3' => null,
            'date_creation' => "2005-12-12",
        ]);

        
        User::create([
            'name' => 'SCI 3',
            'email' => 'sci3@example.com',
            'password' => Hash::make('Azerty06!'),
            'address' => 'Adresse SCI 4',
            'color' => '#458500',
            'nbOfProperty' => 0,
            'revenue1' => 300000,
            'revenue2' => 400000,
            'revenue3' => 500000,
            'date_creation' => "2003-12-12",
        ]);

        
}
}
