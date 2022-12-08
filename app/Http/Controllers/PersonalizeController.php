<?php

namespace App\Http\Controllers;

use App\Models\Personalize;
use Illuminate\Http\Request;

class PersonalizeController extends Controller
{
     //welcome
     public function welcome() {
        return view('auth.welcome');
    }
    
    //create
    public function create() {
        return view('auth.personalize');
    }

    //store
    public function store(Request $request) {
        $request->validate([
            'designers' => '',
            'contractors'=> '',
            'buildings' => '',
            'services' => '',
            'artisans' => '',
            'wares' => '',
            'properties' => '',
            'others' => '',
        ]);

        //dd($request->all());

        $user = new Personalize();
        $user->user_id = auth()->user()->id;
        $user->designers = $request->designers;
        $user->contractors = $request->contractors;
        $user->buildings = $request->buildings;
        $user->services = $request->services;
        $user->artisans = $request->artisans;
        $user->wares = $request->wares;
        $user->properties = $request->properties;
        $user->others = $request->others;
        $user->save();

        return redirect()->route('market');
    }
}
