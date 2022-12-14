@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Create, Update and <strike>delete</strike> Category</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <h3 class="card-title">Product</h3>
                        <div class="ml-auto">
                            <a data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8" class="btn btn-primary btn-sm modal-effect"><i class="fa fa-plus"></i> Add new product</a>
                        </div>
                        <!-- Add new MODAL EFFECTS -->
                        <div class="modal fade" id="modaldemo8">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000;">New product</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="modal-body">
                                            {{-- title --}}
                                            <div class="form-group">
                                                <input 
                                                type="title" 
                                                class="form-control @error('title') is-invalid @enderror"
                                                value="{{ old('title') }}"
                                                id="title" name="title" 
                                                aria-describedby="titleHelp"
                                                required
                                                placeholder="Product title" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                
                                                @if ($errors->has('title'))
                                                    <div id="titleHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('title') }}</div>
                                                    </div>
                                                @endif
                                            </div>

                                            {{-- select category --}}
                                            <div class="form-group">
                                                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                    <option value="">Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('category_id'))
                                                    <div id="category_idHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('category_id') }}</div>
                                                    </div>
                                                @endif
                                            </div>

                                            {{-- select sub category --}}
                                            <div class="form-group">
                                                <select class="form-control @error('subcategory_id') is-invalid @enderror" id="subcategory_id" name="subcategory_id" required style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                    <option value="">Select Sub Category</option>
                                                    @foreach ($sub_categories as $sub_category)
                                                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('subcategory_id'))
                                                    <div id="subcategory_idHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('subcategory_id') }}</div>
                                                    </div>
                                                @endif
                                            </div>

                                            {{-- description --}}
                                            <div class="form-group">
                                                <textarea 
                                                class="form-control content @error('description') is-invalid @enderror" 
                                                id="description" 
                                                name="description" 
                                                rows="3" 
                                                placeholder="Description" 
                                                style="border: 1px solid rgb(63, 48, 197); border-radius: 0;"
                                                required
                                                >{{ old('description') }}</textarea>
                                                @if ($errors->has('description'))
                                                    <div id="descriptionHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('description') }}</div>
                                                    </div>
                                                @endif
                                            </div>

                                            {{-- image --}}
                                            <div class="form-group">
                                                <input 
                                                type="file" 
                                                class="dropify form-control @error('image') is-invalid @enderror" 
                                                id="image" 
                                                name="image"  
                                                data-bs-height="145">

                                                @if ($errors->has('image'))
                                                    <div id="imageHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('image') }}</div>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="col-md-12 d-flex mb-2" id="addMore" onclick="myFunction();" style="cursor: pointer; user-select:none;">
                                                <img class="me-3" src="{{ asset('general/imgs/icons/post.svg') }}" alt="">
                                                <span>Add more samples</span>
                                            </div>
                    
                                            <div class="col-md-12" id="showMore" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-group">
                                                            <input type="file" class="dropify form-control @error('thumbnail') is-invalid @enderror"
                                                                id="thumbnail" name="thumbnail" data-bs-height="100">
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
                                                                id="thumbnail1" name="thumbnail1" data-bs-height="100">
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
                                                                id="thumbnail2" name="thumbnail2" data-bs-height="100">
                                                                @if ($errors->has('thumbnail2'))
                                                                    <div id="thumbnail2Help" class="form-text text-danger">
                                                                        <div>{{ $errors->first('thumbnail2') }}</div>
                                                                    </div>
                                                                @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Publish</button> 
                                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal effects-->


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th class="wd-15p border-bottom-0">Product Name<br>
                                        <span style="font-size: 10px">
                                            Approval Status
                                        </span>
                                    </th>
                                        <th class="wd-15p border-bottom-0">Category <br><span style="font-size: 10px">Sub category</span></th>
                                        <th class="wd-15p border-bottom-0">Service Provider</th>
                                        <th class="wd-15p border-bottom-0">User</th>
                                        <th class="wd-15p border-bottom-0">Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $id++ }}</td>
                                            <td>{{ $product->title }} <br>
                                                @if ($product->publish == 1)
                                                    <span class="btn btn-sm btn-success">Approved</span>
                                                @else
                                                    <span class="btn btn-sm btn-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td>{{ $product->category_title }} <br>
                                                {{ Str::limit($product->subcategory_title, 16) }}
                                            </td>
                                            <td>{{ $product->provider->title }}</td>
                                            <td>{{ $product->user->username }}</td>
                                            <td>{{ $product->created_at->diffForHumans() }}</td>
                                            <td>
                                                {{-- group edit and delete Icon --}}
                                                <div class="btn-group">
                                                    @if($product->user_id == Auth::user()->id)
                                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info"><i class="fe fe-edit"></i></a>                                                        
                                                    @else
                                                    <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modalViewdemo{{ $product->id }}" class="modal-effect btn btn-sm btn-info"><i class="fe fe-eye"></i></a>
                                                    @endif
                                                    @if($product->publish == 0)
                                                    <form method="post" action="{{ route('products.publish', $product->id) }}">
                                                        @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure you want to approve this product?')" class="btn btn-sm btn-success" style="border-radius: 0">
                                                        <i class="fe fe-check"></i>
                                                    </button>
                                                    </form>
                                                    @else
                                                    <form method="post" action="{{ route('products.unpublish', $product->id) }}">
                                                        @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure you want to disapprove this product?')" class="btn btn-sm text-white" style="border-radius: 0; background:rgb(197, 95, 48)">
                                                        <i class="fe fe-x-circle"></i>
                                                    </button>
                                                    </form>
                                                    @endif                                                    

                                                    <form method="post" action="{{ route('products.destroy', $product->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-sm btn-danger" style="border-top-left-radius: 0; border-bottom-left-radius: 0"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>

                                            <!-- VIEW POST MODAL EFFECTS -->
                                             <div class="modal fade effect-scale" id="modalViewdemo{{ $product->id }}">
                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                    <div class="modal-content modal-content-demo">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title">Edit product</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                
                                                        <div class="modal-body">

                                                            {{-- Edit Image --}}
                                                            <div class="image mb-4">
                                                                    <img class="img-thumbnail" src="{{ asset('storage/'.$product->image) }}" alt="">
                                                            </div>
                                        

                                                            <div class="form-group">
                                                                <input 
                                                                type="title" 
                                                                class="form-control @error('title') is-invalid @enderror"
                                                                value="{{ $product->title, old('title') }}"
                                                                id="title" name="title" 
                                                                aria-describedby="titleHelp"
                                                                placeholder="product Name" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                                
                                                            </div> 

                                                            {{-- description --}}
                                                            <div class="form-group">
                                                                <textarea 
                                                                class="form-control @error('description') is-invalid @enderror" 
                                                                id="description" name="description" 
                                                                aria-describedby="descriptionHelp"
                                                                rows="4"
                                                                placeholder="Description" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">{{ $product->description, old('description') }}</textarea>
                                                                
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            @if($product->publish == 0)
                                                            <form method="post" action="{{ route('products.publish', $product->id) }}">
                                                                @csrf
                                                            <button type="submit" onclick="return confirm('Are you sure you want to approve this product?')" class="btn btn-sm btn-success" style="border-radius: 0">
                                                                Aprove Post
                                                            </button>
                                                            </form>
                                                            @else
                                                            <form method="post" action="{{ route('products.unpublish', $product->id) }}">
                                                                @csrf
                                                            <button type="submit" onclick="return confirm('Are you sure you want to disapprove this product?')" class="btn btn-sm text-white" style="border-radius: 0; background:rgb(197, 95, 48)">
                                                                Disapprove Post
                                                            </button>
                                                            </form>
                                                            @endif 
                                                             <button class="btn btn-light rounded-0 px-2 py-1" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal effects-->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
        <script>
            function myFunction() {
                var x = document.getElementById("showMore");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>


    @endsection