<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        return view('buildbeta');
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
