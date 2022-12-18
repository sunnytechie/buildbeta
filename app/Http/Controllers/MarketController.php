<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Personalize;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        //categories and subcategories
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        //if user is logged in
        if(auth()->user()) {
        $currentUser = auth()->user()->id;   
        //find currentUser from personalize table
            $personalize = Personalize::where('user_id', $currentUser)->first();
            if ($personalize) {
                //Write query here.
                return view('buildbeta', compact('categories', 'sub_categories'));
            } else {
                return view('auth.personalize');
            }
        } else {
            return view('buildbeta', compact('categories', 'sub_categories'));
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
