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
            'color' => '#000000',
            'nbOfProperty' => 2,
            'revenue1' => 30000,
            'revenue2' => 40000,
            'revenue3' => 50000,
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
            'revenue1' => 3000,
            'revenue2' => 4000,
            'revenue3' => null,
            'date_creation' => "2005-12-12",
        ]);

        User::create([
            'name' => 'SCI 3',
            'email' => 'sci3@example.com',
            'password' => Hash::make('Azerty06!'),
            'address' => 'Adresse SCI 3',
            'color' => '#FF5000',
            'nbOfProperty' => 0,
            'revenue1' => 30000,
            'revenue2' => 42000,
            'revenue3' => 4575,
            'date_creation' => "2004-12-12",
        ]);

        User::create([
            'name' => 'SCI 4',
            'email' => 'sci4@example.com',
            'password' => Hash::make('Azerty06!'),
            'address' => 'Adresse SCI 4',
            'color' => '#458500',
            'nbOfProperty' => 0,
            'revenue1' => 300,
            'revenue2' => 400,
            'revenue3' => 5000,
            'date_creation' => "2003-12-12",
        ]);

        User::create([
            'name' => 'SCI 5',
            'email' => 'sci5@example.com',
            'password' => Hash::make('Azerty06!'),
            'address' => 'Adresse SCI 5',
            'color' => '#F12345',
            'nbOfProperty' => 0,
            'revenue1' => 3000,
            'revenue2' => 4000,
            'revenue3' => 25858,
            'date_creation' => "2002-12-12",
        ]);

        User::create([
            'name' => 'SCI 6',
            'email' => 'sci6@example.com',
            'password' => Hash::make('Azerty06!'),
            'address' => 'Adresse SCI 6',
            'color' => '#789456',
            'nbOfProperty' => 0,
            'revenue1' => 3000,
            'revenue2' => 4000,
            'revenue3' => null,
            'date_creation' => "2001-12-12",
        ]);

        User::create([
            'name' => 'SCI 7',
            'email' => 'sci7@example.com',
            'password' => Hash::make('Azerty06!'),
            'address' => 'Adresse SCI 7',
            'color' => '#000Ff0',
            'nbOfProperty' => 0,
            'revenue1' => 3000,
            'revenue2' => 4000,
            'revenue3' => null,
            'date_creation' => "2000-12-12",
        ]);



      
    }
}
