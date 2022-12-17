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
    
    public function findProduct()
    {
        return view('requirements.findProduct');
    }

    public function findDesign()
    {
        return view('requirements.findDesign');
    }

    public function showProduct($id)
    {
        return view('requirements.showProduct');
    }

    public function showDesign($id)
    {
        return view('requirements.showDesign');
    }
}
