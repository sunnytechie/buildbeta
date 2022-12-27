<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function product()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('requirements.product', compact('categories', 'sub_categories'));
    }

    public function design()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('requirements.design', compact('categories', 'sub_categories'));
    }
    
    public function findProduct()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('requirements.findProduct', compact('categories', 'sub_categories'));
    }

    public function findDesign()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('requirements.findDesign', compact('categories', 'sub_categories'));
    }

    public function showProduct($id)
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('requirements.showProduct', compact('categories', 'sub_categories'));
    }

    public function showDesign($id)
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('requirements.showDesign', compact('categories', 'sub_categories'));
    }
}
