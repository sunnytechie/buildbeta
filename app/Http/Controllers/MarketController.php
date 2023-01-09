<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Personalize;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        //products
        $products = Product::orderBy('id', 'desc')->where('publish', 1)->paginate(30);
        //sliders last 3 with publish 1
        $sliders = Slider::orderBy('id', 'desc')->where('publish', 1)->get();
        $take2Slides = Slider::orderBy('id', 'desc')->where('publish', 1)->take(2)->get();

        //get products with first provider id
        $productWithId1 = Product::orderBy('id', 'desc')->where('provider_id', 1)->where('publish', 1)->paginate(30);
        $productWithId2 = Product::orderBy('id', 'desc')->where('provider_id', 2)->where('publish', 1)->paginate(30);
        $productWithId3 = Product::orderBy('id', 'desc')->where('provider_id', 3)->where('publish', 1)->paginate(30);

        //categories and subcategories
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        //if user is logged in
        if(auth()->user()) {
            //check user is verified
            if(auth()->user()->email_verified_at == null) {
                return redirect()->route('verification.notice');
            }else {
                //get current user id
                $currentUser = auth()->user()->id;
                //find currentUser from personalize table
                $personalize = Personalize::where('user_id', $currentUser)->first();
                if ($personalize) {
                    //Write query here.
                    return view('buildbeta', compact('categories', 'sub_categories', 'products', 'productWithId1', 'productWithId2', 'productWithId3', 'sliders', 'take2Slides'));
                } else {
                    return view('auth.personalize');
                }
            }
       
        } else {
            return view('buildbeta', compact('categories', 'sub_categories', 'products', 'productWithId1', 'productWithId2', 'productWithId3', 'sliders', 'take2Slides'));
        }
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();

        $request->validate([
            'query' => 'required|min:1',
            'category' => '',
        ]);

        //dd($request->all());

        $query = $request->input('query');
        $category = $request->input('category');

        if ($category) {
            $products = Product::search($query)->where('category_id', $category)->where('publish', 1)->paginate(30);
        } else {
            $products = Product::search($query)->where('publish', 1)->paginate(30);
        }

        return view('search', compact('products', 'categories', 'sub_categories'));
    }

    public function browse()
    {
        $products = Product::orderBy('id', 'desc')->where('publish', 1)->paginate(30);
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('browse', compact('categories', 'sub_categories', 'products'));
    }
}
