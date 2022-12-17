    @extends('layouts.dashboard')
        @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Central Dashboard</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 -->
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Total Post Requirement</h6>
                                        <h2 class="mb-0 number-font">xx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-upload-cloud" style="font-size: 60px; color: rgb(82, 52, 77)"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                            class="fe fe-arrow-up-circle  text-secondary"></i> xxx</span>
                                    Last week</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Total Find Requirement</h6>
                                        <h2 class="mb-0 number-font">xx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-search" style="font-size: 60px; color: rgb(235, 107, 216)"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                            class="fe fe-arrow-up-circle  text-secondary"></i> xxx</span>
                                    Last week</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Total Bforce Member</h6>
                                        <h2 class="mb-0 number-font">xx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="saleschart"
                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                            class="fe fe-arrow-up-circle  text-secondary"></i> xxx</span>
                                    Last week</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Total Service Provider</h6>
                                        <h2 class="mb-0 number-font">xx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="leadschart"
                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-pink"><i
                                            class="fe fe-arrow-down-circle text-pink"></i> xxx</span>
                                    Last 7 days</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Total Buyer</h6>
                                        <h2 class="mb-0 number-font">xxx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="profitchart"
                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-green"><i
                                            class="fe fe-arrow-up-circle text-green"></i> xxx</span>
                                    Last 10 days</span>
                            </div>
                        </div>
                    </div>

                    {{-- Another row --}}

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Escrow Transaction</h6>
                                        <h2 class="mb-0 number-font">xxx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="costchart"
                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-warning"><i
                                            class="fe fe-arrow-up-circle text-warning"></i> xxxxx</span>
                                    this month</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Pending Escrow</h6>
                                        <h2 class="mb-0 number-font">xxx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-x-circle" style="font-size: 60px; color: #ddd"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-green"><i
                                            class="fe fe-arrow-up-circle text-green"></i> xxx</span>
                                    Last 10 days</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Completed Escrow</h6>
                                        <h2 class="mb-0 number-font">xx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-check" style="font-size: 60px; color: rgb(235, 107, 216)"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                            class="fe fe-arrow-up-circle  text-secondary"></i> xxx</span>
                                    Last week</span>
                            </div>
                        </div>
                    </div>


                    {{-- Another row --}}
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Total Jobs</h6>
                                        <h2 class="mb-0 number-font">xx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-briefcase" style="color:rgb(14, 254, 254); font-size: 60px"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                            class="fe fe-arrow-up-circle  text-secondary"></i> xxx</span>
                                    Posted Last week</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Total Approved Product</h6>
                                        <h2 class="mb-0 number-font">xx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-activity" style="color:rgb(202, 254, 14); font-size: 60px"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-pink"><i
                                            class="fe fe-arrow-down-circle text-pink"></i> xxx</span>
                                    Last 7 days</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Pending approval</h6>
                                        <h2 class="mb-0 number-font">xxx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-alert-triangle" style="color:rgb(17, 132, 132); font-size: 60px"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-green"><i
                                            class="fe fe-arrow-up-circle text-green"></i> xxx</span>
                                    Last 10 days</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Approved Product</h6>
                                        <h2 class="mb-0 number-font">xxx,xxx</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <img height="70" width="70" src="{{ asset('general/imgs/icons/product.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-green"><i
                                            class="fe fe-arrow-up-circle text-green"></i> xxx</span>
                                    Last 10 days</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- ROW-1 END -->


        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product requesting review</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th class="wd-15p border-bottom-0">Product Name</th>
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
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->category_title }}. 
                                            {{ $product->subcategory_title }}
                                        </td>
                                        <td>{{ $product->provider->title }}</td>
                                        <td>{{ $product->user->username }}</td>
                                        <td>{{ $product->created_at->diffForHumans() }}</td>
                                        <td>
                                            {{-- group edit and delete Icon --}}
                                            <div class="btn-group">
                                                @if($product->user_id == Auth::user()->id)
                                                <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modalEditdemo{{ $product->id }}" class="modal-effect btn btn-sm btn-info"><i class="fe fe-eye"></i></a>                                                        
                                                @else
                                                <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modalViewdemo{{ $product->id }}" class="modal-effect btn btn-sm btn-info"><i class="fe fe-pencil"></i></a>
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

                                        <!-- MODAL EFFECTS -->
                                         <div class="modal fade effect-scale" id="modalEditdemo{{ $product->id }}">
                                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">Edit product</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <form method="post" action="{{ route('products.publish', $product->id) }}">
                                                        @csrf

                                                    <div class="modal-body">

                                                        {{-- Edit Image --}}
                                                        <div class="form-group">
                                                            <label for="image">
                                                                <img src="{{ asset('storage/'.$product->image) }}" alt="" width="100px" height="100px">
                                                            </label>
                                                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ $product->image, old('image') }}">
                                                            @if ($errors->has('image'))
                                                                <div id="imageHelp" class="form-text text-danger">
                                                                    <div>{{ $errors->first('image') }}</div>
                                                                </div>
                                                            @endif
                                                        </div>
                                    

                                                        <div class="form-group">
                                                            <input 
                                                            type="title" 
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            value="{{ $product->title, old('title') }}"
                                                            id="title" name="title" 
                                                            aria-describedby="titleHelp"
                                                        
                                                            placeholder="product Name" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                            @if ($errors->has('title'))
                                                                <div id="titleHelp" class="form-text text-danger">
                                                                    <div>{{ $errors->first('title') }}</div>
                                                                </div>
                                                            @endif
                                                        </div> 

                                                        {{-- category --}}
                                                        <div class="form-group">
                                                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                                                <option value="">Select Category</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                                                @endforeach
                                                            </select>
                                                            @if ($errors->has('category_id'))
                                                                <div id="category_idHelp" class="form-text text-danger">
                                                                    <div>{{ $errors->first('category_id') }}</div>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        {{-- subcategory --}}
                                                        <div class="form-group">
                                                            <select class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" id="subcategory_id">
                                                                <option value="">Select Subcategory</option>
                                                                @foreach ($sub_categories as $subcategory)
                                                                    <option value="{{ $subcategory->id }}" {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}>{{ $subcategory->title }}</option>
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
                                                            class="form-control @error('description') is-invalid @enderror" 
                                                            id="description" name="description" 
                                                            aria-describedby="descriptionHelp"
                                                            rows="4"
                                                        
                                                            placeholder="Description" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">{{ $product->description, old('description') }}</textarea>
                                                            @if ($errors->has('description'))
                                                                <div id="descriptionHelp" class="form-text text-danger">
                                                                    <div>{{ $errors->first('description') }}</div>
                                                                </div>
                                                            @endif
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="submit">Approve Product</button> 
                                                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
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



        
    @endsection