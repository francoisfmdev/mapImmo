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
            'latitude'=> '43.70745',
            'longitude'=>'7.2690814',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '91',
            'streetName' => 'Boulevard Gambetta',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.7048645',
            'longitude'=>'7.2559909',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '7',
            'streetName' => 'Montée Claire Virenque',
            'postalCode' => '06100',
            'city' => 'Nice',
            'latitude'=> '43.7175661',
            'longitude'=>'7.2555836',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '34',
            'streetName' => 'Boulevard Carnot',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.6967283',
            'longitude'=>'7.289099 ',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '54',
            'streetName' => 'Avenue du Ray',
            'postalCode' => '06100',
            'city' => 'Nice',
            'latitude'=> '43.7256251',
            'longitude'=>'7.2543758',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '83',
            'streetName' => 'Corniche Fleurie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6818442',
            'longitude'=>'7.2187713',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '72',
            'streetName' => 'Rue Auguste Pégurier',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6727567',
            'longitude'=>'7.2224064',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '46',
            'streetName' => 'Boulevard du Maréchal Juin',
            'postalCode' => '06800',
            'city' => 'Cagnes-sur-Mer',
            'latitude'=> '43.6618832',
            'longitude'=>'7.1506441',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '39',
            'streetName' => 'Chemin des Presses',
            'postalCode' => '06800',
            'city' => 'Cagnes-sur-Mer',
            'latitude'=> '43.6708623',
            'longitude'=>'7.1300948',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '61',
            'streetName' => 'Avenue Denis Semeria',
            'postalCode' => '06230',
            'city' => 'Saint-Jean-Cap-Ferrat',
            'latitude'=> '43.6930206',
            'longitude'=>'7.328339656268392',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '55',
            'streetName' => 'Boulevard Maréchal Foch',
            'postalCode' => '06600',
            'city' => 'Antibes',
            'latitude'=> '43.5763968',
            'longitude'=>'7.1243246',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '45',
            'streetName' => 'Chemin Valentin',
            'postalCode' => '06600',
            'city' => 'Antibes',
            'latitude'=> '43.58300645',
            'longitude'=>'7.108480689213074',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '14',
            'streetName' => 'Avenue de Provence',
            'postalCode' => '06270',
            'city' => 'Villeneuve-Loubet',
            'latitude'=> '43.64232705',
            'longitude'=>'7.140850773508705',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '15',
            'streetName' => 'Avenue des Acacias',
            'postalCode' => '06270',
            'city' => 'Villeneuve-Loubet',
            'latitude'=> '43.645303999999996',
            'longitude'=>'7.137025310115581',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '37',
            'streetName' => 'Boulevard de Cimiez',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.7079564',
            'longitude'=>'7.2705988',
            'nbPropertyAddress'=> 1  
        ]);
        

        
        
    }
}
