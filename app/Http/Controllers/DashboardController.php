<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->where('publish', 0)->get();
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('dashboard', compact('products', 'categories', 'sub_categories'));
    }
}
