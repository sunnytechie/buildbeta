<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        $subcategories = Subcategory::all();
        $categories = Category::all();
        
        return view('subcategories.index', compact('subcategories', 'categories'));
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
        //validate request
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
        ]);

        //dd($request->all());

        //store
        $subcategory = new Subcategory();
        $subcategory->title = $request->title;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();

        //redirect with message
        return redirect()->route('subcategories.index')->with('message', 'Subcategory created successfully');
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
        //validate request
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
        ]);

        //dd($request->all());

        //update
        $subcategory = Subcategory::find($id);
        $subcategory->title = $request->title;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();

        //redirect with message
        return redirect()->route('subcategories.index')->with('message', 'Subcategory updated successfully');
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
        $subcategory = Subcategory::find($id);
        $subcategory->delete();

        //redirect with message
        return redirect()->route('subcategories.index')->with('message', 'Subcategory deleted successfully');
    }
}
