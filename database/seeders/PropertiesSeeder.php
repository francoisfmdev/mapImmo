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
        Properties::create([
            'nom' => 'Le France',
            'type' => 'Garage',   
            'user_id' => '1',
            'address_id' => '16',      
        ]);
        Properties::create([
            'nom' => 'Le France 2',
            'type' => 'T1',   
            'user_id' => '1',
            'address_id' => '17',      
        ]);
        Properties::create([
            'nom' => 'Le France 3',
            'type' => 'T2',   
            'user_id' => '1',
            'address_id' => '18',      
        ]);
        Properties::create([
            'nom' => 'Le France 4',
            'type' => 'T3',   
            'user_id' => '1',
            'address_id' => '19',      
        ]);
        Properties::create([
            'nom' => 'Le France 5',
            'type' => 'Villa',   
            'user_id' => '1',
            'address_id' => '20',      
        ]);
        Properties::create([
            'nom' => 'Le Cess',
            'type' => 'Villa',   
            'user_id' => '2',
            'address_id' => '21',      
        ]);
        Properties::create([
            'nom' => 'Le Cess 2',
            'type' => 'Garage',   
            'user_id' => '2',
            'address_id' => '22',      
        ]);
        Properties::create([
            'nom' => 'Le Cess 3',
            'type' => 'T5',   
            'user_id' => '2',
            'address_id' => '23',      
        ]);
        Properties::create([
            'nom' => 'Le Cess 4',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '24',      
        ]);
        Properties::create([
            'nom' => 'Le Cess 5',
            'type' => 'T4',   
            'user_id' => '2',
            'address_id' => '25',      
        ]);
        Properties::create([
            'nom' => 'Le Fab',
            'type' => 'T5',   
            'user_id' => '2',
            'address_id' => '26',      
        ]);
        Properties::create([
            'nom' => 'Le Fab',
            'type' => 'T2',   
            'user_id' => '2',
            'address_id' => '27',      
        ]);
        Properties::create([
            'nom' => 'Le Fab',
            'type' => 'T4',   
            'user_id' => '2',
            'address_id' => '28',      
        ]);
        Properties::create([
            'nom' => 'Le Fab',
            'type' => 'T1',   
            'user_id' => '2',
            'address_id' => '29',      
        ]);
        Properties::create([
            'nom' => 'Le Fab',
            'type' => 'T5',   
            'user_id' => '2',
            'address_id' => '30',      
        ]);
        Properties::create([
            'nom' => 'Le Fab',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '31',      
        ]);
        Properties::create([
            'nom' => 'Le Fab',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '32',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '33',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '34',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '35',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '36',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '37',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '38',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '39',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '40',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '41',      
        ]);
        Properties::create([
            'nom' => 'Le Calif',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '42',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '43',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '44',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '45',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '46',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '47',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '48',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '49',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'Garage',   
            'user_id' => '2',
            'address_id' => '50',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T5',   
            'user_id' => '2',
            'address_id' => '51',      
        ]);
        Properties::create([
            'nom' => 'Le Prom',
            'type' => 'T3',   
            'user_id' => '2',
            'address_id' => '52',      
        ]);
        
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'Garage',   
            'user_id' => '3',
            'address_id' => '53',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'T3',   
            'user_id' => '3',
            'address_id' => '54',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'T4',   
            'user_id' => '3',
            'address_id' => '55',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'T3',   
            'user_id' => '3',
            'address_id' => '56',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'T3',   
            'user_id' => '3',
            'address_id' => '57',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'T4',   
            'user_id' => '3',
            'address_id' => '58',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'Garage',   
            'user_id' => '3',
            'address_id' => '59',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'T3',   
            'user_id' => '3',
            'address_id' => '60',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'Villa',   
            'user_id' => '3',
            'address_id' => '61',      
        ]);
        Properties::create([
            'nom' => 'Le Saint',
            'type' => 'Garage',   
            'user_id' => '3',
            'address_id' => '62',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'T2',   
            'user_id' => '1',
            'address_id' => '63',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'T3',   
            'user_id' => '1',
            'address_id' => '64',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'T5',   
            'user_id' => '1',
            'address_id' => '65',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'T3',   
            'user_id' => '1',
            'address_id' => '66',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'Garage',   
            'user_id' => '1',
            'address_id' => '67',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'T5',   
            'user_id' => '1',
            'address_id' => '68',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'T1',   
            'user_id' => '1',
            'address_id' => '69',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'T2',   
            'user_id' => '1',
            'address_id' => '70',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'T3',   
            'user_id' => '1',
            'address_id' => '71',      
        ]);
        Properties::create([
            'nom' => 'Le Gio',
            'type' => 'Villa',   
            'user_id' => '1',
            'address_id' => '72',      
        ]);
        

       
        
        
    }
    
}
