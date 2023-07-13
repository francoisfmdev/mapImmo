<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
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
            'nbOfProperty' => 0,
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
    }
}
