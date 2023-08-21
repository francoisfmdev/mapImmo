<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;


class AddressController extends Controller
{
    public function new_address(Request $req){

        $ad = $this->get_one_address($req);
        if (count($ad) == 0){
            $address = new Address();
        $address->fullAddress = $req->input('fullAddress');
        $address->longitude = $req->input('lon');
        $address->latitude = $req->input('lat');
            
        $address->save();
        }
        else{
            foreach ($ad as $addres){
           $address = Address::find($addres->id);
           $address->nbPropertyAddress +=1;
           $address->update();
            }
            
        }
        
     }

     

    public function get_one_address(Request $req){

        $address = Address::query()
        ->where("fullAddress" , "=" , $req->input("fullAddress"))
        ->get();

        return $address;
    }

    public function get_nb_bien_for_address(int $ad_id){

        $address = Address::query()
        ->where("address_id" , "=" , $ad_id )
        ->get();
        $nb_bien = $address->count();

        return $nb_bien;


    }

   
}
