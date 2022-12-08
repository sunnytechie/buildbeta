<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    //index
    public function index()
    {
        return view('vacancy.job');
    }

    //show
    public function show($id)
    {
        return view('vacancy.show');
    }

    //create
    public function create() {
        return view('vacancy.create');
    }

    //store
}
