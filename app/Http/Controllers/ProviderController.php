<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        $providers = Provider::all();
        return view('dashboard.providers.index', compact('providers'));
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
        ]);

        //store
        $provider = new Provider();
        $provider->title = $request->title;
        $provider->description = $request->description;
        $provider->save();

        //redirect
        return redirect()->route('providers.index')->with('message', 'Provider created successfully.');
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
        //validate
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        //update
        $provider = Provider::find($id);
        $provider->title = $request->title;
        $provider->description = $request->description;
        $provider->save();

        //redirect
        return redirect()->route('providers.index')->with('message', 'Provider updated successfully.');
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
        $provider = Provider::find($id);
        $provider->delete();

        //redirect
        return redirect()->route('providers.index')->with('message', 'Provider deleted successfully.');
    }
}
