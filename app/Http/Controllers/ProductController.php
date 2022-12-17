<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('dashboard.products.index', compact('products', 'categories', 'sub_categories'));
    }

    public function publish($id)
    {
        //find product
        $product = Product::find($id);
        //publish
        $product->publish = 1;
        $product->save();
        //redirect
        return redirect()->back()->with('message', 'Product published successfully.');
    }

    public function unpublish($id)
    {
        //find product
        $product = Product::find($id);
        //publish
        $product->publish = 0;
        $product->save();
        //redirect
        return redirect()->back()->with('message', 'Product unpublished successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'publish' => '',
        ]);

        //category title from the category id
        $category = Category::find($request->category_id);
        $category_title = $category->title;

        //subcategory title from the subcategory id
        $subcategory = Subcategory::find($request->subcategory_id);
        $subcategory_title = $subcategory->title;

        //provider_id
        //Work on this later
        if (auth()->user()->is_admin) {
            $provider_id = auth()->user()->id;
        } else {
            $provider_id = Auth::user()->provider->id;
        }
        //user_id
        $user_id = auth()->user()->id;

        //store
        $product = new Product();
        $product->user_id = $user_id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->category_title = $category_title;
        $product->subcategory_id = $request->subcategory_id;
        $product->subcategory_title = $subcategory_title;
        $product->provider_id = $provider_id;
        $product->publish = $request->publish;
        $product->image = $request->image;
        $product->thumbnail = $request->thumbnail;
        $product->save();


        //redirect
        return redirect()->route('products.index')->with('message', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $product = Product::find($id);
        $product->delete();
        //redirect
        return redirect()->route('products.index')->with('message', 'Product deleted successfully.');
    }
}
