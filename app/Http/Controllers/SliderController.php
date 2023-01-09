<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //sliders get last 3
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('dashboard.sliders.index', compact('sliders'));
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
            'title' => '',
            'tagline' => '',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'button_text' => '',
            'button_link' => '',
        ]);

        //dd($request->all());

        //store image
        $imagePath = request('image')->store('sliders', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(833, 445);
        $image->save();


        //store
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->tagline = $request->tagline;
        $slider->image = $imagePath;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->save();

        return redirect()->back()->with('message', 'Slider added successfully');

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
        $slider = Slider::find($id);
        return view('dashboard.sliders.edit', compact('slider'));
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
            'title' => '',
            'tagline' => '',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'button_text' => '',
            'button_link' => '',
        ]);

        //dd($request->all());

        //store image
        if($request->hasFile('image')) {
            $imagePath = request('image')->store('sliders', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(833, 445);
            $image->save();
        }

        //store
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->tagline = $request->tagline;
        if($request->hasFile('image')) {
            $slider->image = $imagePath;
        }
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->save();

        return redirect()->back()->with('message', 'Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('message', 'Slider deleted successfully');
    }

    public function publish($id)
    {
        $slider = Slider::find($id);
        $slider->publish = 1;
        $slider->save();
        return redirect()->back()->with('message', 'Slider published successfully');
    }

    public function unpublish($id)
    {
        $slider = Slider::find($id);
        $slider->publish = 0;
        $slider->save();
        return redirect()->back()->with('message', 'Slider unpublished successfully');
    } 
}
