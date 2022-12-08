<?php

namespace App\Http\Controllers;

use App\Models\Personalize;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        //if user is logged in
        if(auth()->user()) {
        $currentUser = auth()->user()->id;   
        //find currentUser from personalize table
            $personalize = Personalize::where('user_id', $currentUser)->first();
            if ($personalize) {
                //Write query here.
                return view('buildbeta');
            } else {
                return view('auth.personalize');
            }
        } else {
            return view('buildbeta');
        }
    }
    

    public function search()
    {
        return view('search');
    }


    public function browse()
    {
        return view('browse');
    }
}
