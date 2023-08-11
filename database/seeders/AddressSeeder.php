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
        Address::create([
            
            'streetNumber' => '156',
            'streetName' => 'Rue de France',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.692444',
            'longitude'=>'7.247506',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '137',
            'streetName' => 'Rue de France',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.693117',
            'longitude'=>'7.250588806980433',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '13',
            'streetName' => 'Rue de France',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '44.0869306',
            'longitude'=>'7.5934268',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '66',
            'streetName' => 'Rue de France',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.6951751',
            'longitude'=>'7.2555726',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '121',
            'streetName' => 'Rue de France',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.6939203',
            'longitude'=>'7.2523389',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '28',
            'streetName' => 'Bd de Cessole',
            'postalCode' => '06100',
            'city' => 'Nice',
            'latitude'=> '43.7124266',
            'longitude'=>'7.25552644512987',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '149',
            'streetName' => 'Bd de Cessole',
            'postalCode' => '06100',
            'city' => 'Nice',
            'latitude'=> '43.7119338',
            'longitude'=>'7.2554802',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '112',
            'streetName' => 'Bd de Cessole',
            'postalCode' => '06100',
            'city' => 'Nice',
            'latitude'=> '43.71984',
            'longitude'=>'7.2519826',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '12',
            'streetName' => 'Bd de Cessole',
            'postalCode' => '06100',
            'city' => 'Nice',
            'latitude'=> '43.7108307',
            'longitude'=>'7.2559465',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '28',
            'streetName' => 'Bd de Cessole',
            'postalCode' => '06100',
            'city' => 'Nice',
            'latitude'=> '43.7123912',
            'longitude'=>'7.2551663',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '1',
            'streetName' => 'Boulevard Carlone',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6935938',
            'longitude'=>'7.2430081',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '11',
            'streetName' => 'Boulevard Carlone',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6936201',
            'longitude'=>'7.2420333',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '30',
            'streetName' => 'Boulevard Carlone',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.693715',
            'longitude'=>'7.2406435',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '16',
            'streetName' => 'Boulevard Carlone',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6938074',
            'longitude'=>'7.2416493',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '49',
            'streetName' => 'Boulevard Carlone',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6936665',
            'longitude'=>'7.2390258',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '23',
            'streetName' => 'Boulevard Carlone',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.693596',
            'longitude'=>'7.2409819',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '17',
            'streetName' => 'Boulevard Carlone',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6936102',
            'longitude'=>'7.2415372',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '4',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6913249',
            'longitude'=>'7.2444962',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '13',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6908074',
            'longitude'=>'7.2439054',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '23',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6904352',
            'longitude'=>'7.2428896',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '37',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.690201',
            'longitude'=>'7.242499',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '40',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6900843',
            'longitude'=>'7.2417197',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '55',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6900843',
            'longitude'=>'7.2417197',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '60',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6891942',
            'longitude'=>'7.2403783',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '72',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6887049',
            'longitude'=>'7.239614',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '99',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6874638',
            'longitude'=>'7.2382242',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '112',
            'streetName' => 'Avenue de la Californie',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6868761',
            'longitude'=>'7.2368933',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '5',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6951472',
            'longitude'=>'7.2647326',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '13',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6951726',
            'longitude'=>'7.2631913',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '21',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6949773',
            'longitude'=>'7.2622516',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '27',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6948318',
            'longitude'=>'7.2607415',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '37',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6944586',
            'longitude'=>'7.2580822',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '43',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6940951',
            'longitude'=>'7.2566422',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '53',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6936206',
            'longitude'=>'7.2545064',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '65',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6929322',
            'longitude'=>'7.2518602',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '77',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.6924204',
            'longitude'=>'7.2499747',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '87',
            'streetName' => 'Promenade des anglais',
            'postalCode' => '06200',
            'city' => 'Nice',
            'latitude'=> '43.691961',
            'longitude'=>'7.249024',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '7',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7094572',
            'longitude'=>'7.2926016',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '11',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7099204',
            'longitude'=>'7.2925919',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '36',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7114791',
            'longitude'=>'7.2929613',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '31',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7117652',
            'longitude'=>'7.292604',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '32',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7110314',
            'longitude'=>'7.2929826',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '2',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7085431',
            'longitude'=>'7.2929274',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '4',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7088909',
            'longitude'=>'7.2929442',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '15',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7102619',
            'longitude'=>'7.2926018',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '17',
            'streetName' => 'Boulevard Saint-Roch',
            'postalCode' => '06300',
            'city' => 'Nice',
            'latitude'=> '43.7104449',
            'longitude'=>'7.292483543201941',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '5',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.7024404',
            'longitude'=>'7.2768015',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '9',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.70229',
            'longitude'=>'7.2767',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '14',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.701885000000004',
            'longitude'=>'7.276129442424245',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '18',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.7014978',
            'longitude'=>'7.2759595',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '23',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.7012173',
            'longitude'=>'7.2759765',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '28',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.7006594',
            'longitude'=>'7.2752599',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '34',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.700194499999995',
            'longitude'=>'7.2746027826254815',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '38',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.6999495',
            'longitude'=>'7.274239206349206',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '44',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.699493000000004',
            'longitude'=>'7.27358839814815',
            'nbPropertyAddress'=> 1  
        ]);
        Address::create([
            
            'streetNumber' => '50',
            'streetName' => 'Rue Gioffredo',
            'postalCode' => '06000',
            'city' => 'Nice',
            'latitude'=> '43.6990774',
            'longitude'=>'7.2725358',
            'nbPropertyAddress'=> 1  
        ]);
        
        

        
        
    }
}
