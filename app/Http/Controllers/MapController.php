<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function mapByProperties(){

        $users = User::all();
        
        
        $numberOfSCIs = DB::table('users')->count();
        $totalRevenue1 = DB::table('users')->sum('revenue1');
        $totalRevenue2 = DB::table('users')->sum('revenue2');
        $totalRevenue3 = DB::table('users')->sum('revenue3');
        $totalProperties = DB::table('users')->sum('nbOfProperty');
        $totalGarage = Properties::where('type', 'Garage')->count();
        $totalT1 = Properties::where('type', 'T1')->count();
        $totalT2 = Properties::where('type', 'T2')->count();
        $totalT3 = Properties::where('type', 'T3')->count();
        $totalT4 = Properties::where('type', 'T4')->count();
        $totalT5 = Properties::where('type', 'T5')->count();
        $totalVilla = Properties::where('type', 'T5')->count();

        
        return view('password.mapByProperties', compact(
            'users', 
            'numberOfSCIs', 
            'totalRevenue1', 
            'totalRevenue2', 
            'totalRevenue3', 
            'totalProperties',
            'totalGarage',
            'totalT1',
            'totalT2',
            'totalT3',
            'totalT4',
            'totalT5',
            'totalVilla',
        ));
    }

    public function mapByScis(){
        $users = User::all();
        $properties = Properties::all();
        // dd($properties);
    
        return view('password.mapByScis', compact('users', 'properties'));
    }

    }

