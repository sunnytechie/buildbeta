<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
                    return view('buildbeta', compact('categories', 'sub_categories'));
                } else {
                    return view('auth.personalize');
                }
            }
       
        } else {
            return view('buildbeta', compact('categories', 'sub_categories'));
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
            $products = Product::search($query)->where('category_id', $category)->paginate(30);
        } else {
            $products = Product::search($query)->paginate(30);
        }

        return view('search', compact('products', 'categories', 'sub_categories'));
    }

    public function browse()
    {
        return view('browse');
    }
}
