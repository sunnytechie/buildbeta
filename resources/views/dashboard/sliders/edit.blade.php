@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Organize your Slider</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('slider.index') }}">Slider List</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Slide</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit this slide</h4>
                    <div class="card-body">
                        <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <input 
                                    type="title" 
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ $slider->title, old('title') }}"
                                    id="title" name="title" 
                                    aria-describedby="titleHelp"
                                    placeholder="Title" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                    @if ($errors->has('title'))
                                        <div id="titleHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('title') }}</div>
                                        </div>
                                    @endif
                                </div> 

                                <div class="form-group">
                                    <input 
                                    type="tagline" 
                                    class="form-control @error('tagline') is-invalid @enderror"
                                    value="{{ $slider->tagline, old('tagline') }}"
                                    id="tagline" name="tagline" 
                                    aria-describedby="taglineHelp"
                                    placeholder="Tagline" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                    @if ($errors->has('tagline'))
                                        <div id="taglineHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('tagline') }}</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input 
                                    type="url" 
                                    class="form-control @error('button_link') is-invalid @enderror"
                                    value="{{ $slider->button_link, old('button_link') }}"
                                    id="button_link" name="button_link" 
                                    aria-describedby="button_linkHelp"
                                    placeholder="Button Link" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                    @if ($errors->has('button_link'))
                                        <div id="button_linkHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('button_link') }}</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input 
                                    type="text" 
                                    class="form-control @error('button_text') is-invalid @enderror"
                                    value="{{ $slider->button_text, old('button_text') }}"
                                    id="button_text" name="button_text" 
                                    aria-describedby="button_textHelp"
                                    placeholder="Button text" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                    @if ($errors->has('button_text'))
                                        <div id="button_textHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('button_text') }}</div>
                                        </div>
                                    @endif
                                </div>

                                {{-- <div class="form-group">
                                    <input type="file" name="image" class="@error('image') is-invalid @enderror" required>
                                </div> --}}

                                <div class="form-group">
                                    <input type="file" 
                                    class="dropify form-control @error('image') is-invalid @enderror" 
                                    data-default-file="/storage/{{ $slider->image }}"
                                    id="image" name="image">

                                    @if ($errors->has('image'))
                                        <div id="imageHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('image') }}</div>
                                        </div>
                                    @endif
                                </div> 

                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>

                            </div>
                            
                        </form>
                  </div>
                </div>
            </div>
        </div>

    @endsection