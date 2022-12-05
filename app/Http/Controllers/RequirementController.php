<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function product()
    {
        return view('requirements.product');
    }

    public function design()
    {
        return view('requirements.design');
    }
}
