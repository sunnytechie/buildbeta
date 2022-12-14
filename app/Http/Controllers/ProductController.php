<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

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
            'thumbnail1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'subcategory_id' => 'required',
        ]);

        //Intervention image
        $imagePath = request('image')->store('products', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 1080);
        $image->save();

        //if has request has thumbnail
        if ($request->has('thumbnail')) {
            $thumbnailPath = request('thumbnail')->store('products', 'public');
            $thumbnail = Image::make(public_path("storage/{$thumbnailPath}"))->fit(1920, 1080);
            $thumbnail->save();
        } 
        
        //if has request has thumbnail1
        if ($request->has('thumbnail1')) {
            $thumbnail1Path = request('thumbnail1')->store('products', 'public');
            $thumbnail1 = Image::make(public_path("storage/{$thumbnail1Path}"))->fit(1920, 1080);
            $thumbnail1->save();
        }

        //if has request has thumbnail2
        if ($request->has('thumbnail2')) {
            $thumbnail2Path = request('thumbnail2')->store('products', 'public');
            $thumbnail2 = Image::make(public_path("storage/{$thumbnail2Path}"))->fit(1920, 1080);
            $thumbnail2->save();
        }

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
            $provider_id = Auth::user()->provider_id;
        }
        //user_id
        $user_id = auth()->user()->id;

        //city
        $city = Auth::user()->city;
        //address
        $address = Auth::user()->address;
        //country
        $country = Auth::user()->country;

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
        $product->publish = 1;
        $product->image = $imagePath;
        if ($request->has('thumbnail')) {
        $product->thumbnail = $thumbnailPath;
        }
        if ($request->has('thumbnail1')) {
        $product->thumbnail1 = $thumbnail1Path;
        }
        if ($request->has('thumbnail2')) {
        $product->thumbnail2 = $thumbnail2Path;
        }
        $product->city = $city;
        $product->address = $address;
        $product->country = $country;
        $product->save();


        //redirect
        return redirect()->route('products.index')->with('message', 'Product created successfully.');
    }

    //seller store
    public function storeProductBySeller(Request $request)
    {
        //validate
       $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'subcategory_id' => 'required',
        ]);
        //dd($request->all());

        //Intervention image
        $imagePath = request('image')->store('products', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 1080);
        $image->save();

        //if has request has thumbnail
        if ($request->has('thumbnail')) {
            $thumbnailPath = request('thumbnail')->store('products', 'public');
            $thumbnail = Image::make(public_path("storage/{$thumbnailPath}"))->fit(1920, 1080);
            $thumbnail->save();
        } 
        
        //if has request has thumbnail1
        if ($request->has('thumbnail1')) {
            $thumbnail1Path = request('thumbnail1')->store('products', 'public');
            $thumbnail1 = Image::make(public_path("storage/{$thumbnail1Path}"))->fit(1920, 1080);
            $thumbnail1->save();
        }

        //if has request has thumbnail2
        if ($request->has('thumbnail2')) {
            $thumbnail2Path = request('thumbnail2')->store('products', 'public');
            $thumbnail2 = Image::make(public_path("storage/{$thumbnail2Path}"))->fit(1920, 1080);
            $thumbnail2->save();
        }

        //category title from the category id
        $category = Category::find($request->category_id);
        $category_title = $category->title;

        //subcategory title from the subcategory id
        $subcategory = Subcategory::find($request->subcategory_id);
        $subcategory_title = $subcategory->title;

        //provider_id
        $provider_id = Auth::user()->provider_id;

        //user_id
        $user_id = Auth::user()->id;

        //city
        $city = Auth::user()->city;
        //address
        $address = Auth::user()->address;
        //country
        $country = Auth::user()->country;

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
        $product->publish = 0;
        $product->image = $imagePath;
        if ($request->has('thumbnail')) {
        $product->thumbnail = $thumbnailPath;
        }
        if ($request->has('thumbnail1')) {
        $product->thumbnail1 = $thumbnail1Path;
        }
        if ($request->has('thumbnail2')) {
        $product->thumbnail2 = $thumbnail2Path;
        }
        
        $product->city = $city;
        $product->address = $address;
        $product->country = $country;
        $product->save();

        return back()->with('message', 'Product Posted For Approval???Your product would be visible in the market place once it is approved.');
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
        $product = Product::find($id);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('dashboard.products.edit', compact('product', 'categories', 'subcategories'));
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
        //validate
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'subcategory_id' => 'required',
        ]); 

        //dd($request->all());

        //Intervention image
        if ($request->has('image')) {
            $imagePath = request('image')->store('products', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 1080);
            $image->save();
        }

        //if has request has thumbnail
        if ($request->has('thumbnail')) {
            $thumbnailPath = request('thumbnail')->store('products', 'public');
            $thumbnail = Image::make(public_path("storage/{$thumbnailPath}"))->fit(1920, 1080);
            $thumbnail->save();
        }

        //if has request has thumbnail1
        if ($request->has('thumbnail1')) {
            $thumbnail1Path = request('thumbnail1')->store('products', 'public');
            $thumbnail1 = Image::make(public_path("storage/{$thumbnail1Path}"))->fit(1920, 1080);
            $thumbnail1->save();
        }

        //if has request has thumbnail2
        if ($request->has('thumbnail2')) {
            $thumbnail2Path = request('thumbnail2')->store('products', 'public');
            $thumbnail2 = Image::make(public_path("storage/{$thumbnail2Path}"))->fit(1920, 1080);
            $thumbnail2->save();
        }

        //category title from the category id
        $category = Category::find($request->category_id);
        $category_title = $category->title;

        //subcategory title from the subcategory id
        $subcategory = Subcategory::find($request->subcategory_id);
        $subcategory_title = $subcategory->title;

        //provider_id
        //$provider_id = Auth::user()->provider_id;

        //user_id
        $user_id = Auth::user()->id;

        //city
        $city = Auth::user()->city;
        //address
        $address = Auth::user()->address;
        //country
        $country = Auth::user()->country;

        //store
        $product = Product::find($id);
        $product->user_id = $user_id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->category_title = $category_title;
        $product->subcategory_id = $request->subcategory_id;
        $product->subcategory_title = $subcategory_title;
        $product->publish = 1;
        if ($request->has('image')) {
            $product->image = $imagePath;
        }
        if ($request->has('thumbnail')) {
            $product->thumbnail = $thumbnailPath;
        }
        if ($request->has('thumbnail1')) {
            $product->thumbnail1 = $thumbnail1Path;
        }
        if ($request->has('thumbnail2')) {
            $product->thumbnail2 = $thumbnail2Path;
        }
        $product->city = $city;
        $product->address = $address;
        $product->country = $country;
        $product->save();

        return redirect()->back()->with('message', 'Product updated successfully.');
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
