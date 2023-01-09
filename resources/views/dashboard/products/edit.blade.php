@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Update Product</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit product</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $product->title }}</h4>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                                <div class="form-group">
                                    <input 
                                    type="title" 
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ $product->title, old('title') }}"
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
                                    <textarea 
                                    class="form-control content @error('description') is-invalid @enderror" 
                                    id="description" 
                                    name="description" 
                                    rows="3" 
                                    placeholder="Description" 
                                    style="border: 1px solid rgb(63, 48, 197); border-radius: 0;"
                                    required
                                    >{{ $product->description, old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <div id="descriptionHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('description') }}</div>
                                        </div>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <select class="form-control" name="category_id" id="category_id"
                                    style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- subcategory_id --}}
                                <div class="form-group">
                                    <select class="form-control" name="subcategory_id" id="subcategory_id"
                                    style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                        <option value="">Select Subcategory</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}>{{ $subcategory->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="file" 
                                    class="dropify form-control @error('image') is-invalid @enderror" 
                                    data-default-file="/storage/{{ $product->image }}"
                                    id="image" name="image">

                                    @if ($errors->has('image'))
                                        <div id="imageHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('image') }}</div>
                                        </div>
                                    @endif
                                </div> 

                                
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <input type="file" class="dropify form-control @error('thumbnail') is-invalid @enderror"
                                                    id="thumbnail" name="thumbnail" data-default-file="/storage/{{ $product->thumbnail }}" data-bs-height="100">
                                                    @if ($errors->has('thumbnail'))
                                                        <div id="thumbnailHelp" class="form-text text-danger">
                                                            <div>{{ $errors->first('thumbnail') }}</div>
                                                        </div>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <input type="file" class="dropify form-control @error('thumbnail1') is-invalid @enderror"
                                                    id="thumbnail1" name="thumbnail1" data-default-file="/storage/{{ $product->thumbnail1 }}" data-bs-height="100">
                                                    @if ($errors->has('thumbnail1'))
                                                        <div id="thumbnail1Help" class="form-text text-danger">
                                                            <div>{{ $errors->first('thumbnail1') }}</div>
                                                        </div>
                                                    @endif
                                            </div>
                                        </div>

        
                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <input type="file" class="dropify form-control @error('thumbnail2') is-invalid @enderror"
                                                    id="thumbnail2" name="thumbnail2" data-default-file="/storage/{{ $product->thumbnail2 }}" data-bs-height="100">
                                                    @if ($errors->has('thumbnail2'))
                                                        <div id="thumbnail2Help" class="form-text text-danger">
                                                            <div>{{ $errors->first('thumbnail2') }}</div>
                                                        </div>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                

                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>

                        </form>
                  </div>
                </div>
            </div>
        </div>

        <!-- End Row -->
    @endsection