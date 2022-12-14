@extends('layouts.seller')
@section('content')
<style>
    .hide-from-dashboard,
    .mobile-tab {
        display: none !important;
    }

    body {
        font-family: 'Poppins', sans-serif !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 1.2 !important;
    }

    /* .footer-ribbon {
                display: none !important;
            } */

    .header-middle {
        border-top: 0 !important;
    }

    #basic-datatable_filter input {
        position: absolute;
        right: 12px;
        width: 200px;
        top: -8px;
        margin-bottom: 5px;
    }

    /* .dataTables_length {
                margin-top: 12px !important;
            } */

    /* First child row in basic-datatable_wrapper */
    .dataTables_wrapper .row:first-child {
        margin-bottom: 15px !important;
        margin-top: 9px !important;
    }

    /* @media size of 425 */
    @media only screen and (max-width: 425px) {
        #basic-datatable_filter input {
            top: -29px !important;
        }
    }

    input:focus {
        border: 1px solid rgb(63, 48, 197) !important;
    }

    .modal-dialog {
        max-width: 500px !important;
        min-width: 300px !important;
    }

    .modal-footer, .modal-header {
        height: auto !important;
    }

    .modal-header {
        background: #0080E6 !important;
        border-radius: 0 !important;
    }
    /* .dropify-wrapper {
        height: 220px !important;
    }
    .dropify-preview {
        height: 220px !important;
        width: 100% !important;
        margin: 0 auto !important;
    } */

    #showMore .dropify-wrapper {
        height: 160px !important;
    }
    #showMore .dropify-preview {
        height: 160px !important;
    }
</style>
<section class="section-1" style="min-height: 60vh">
    <div class="dashboard-content mb-5">

        <div class="d-flex mb-5 justify-content-between">
            <h3 class="account-sub-title d-md-block mt-3" style="font-size: 20px">My Products</h3>

            <div class="d-flex mt-3" style="margin-right: 20px">
                {{-- dropdown --}}
                <div class="dropdown">
                    <div id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('general/imgs/icons/history.svg') }}" alt="History">
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-right: 85px">
                        <a class="dropdown-item py-4 px-5" href="{{ route('reward.store') }}" style="font-family: 'Poppins'; font-size: 12px">Reward Store</a>
                        <a class="dropdown-item pb-4 px-5" href="{{ route('seller.settings') }}" style="font-family: 'Poppins'; font-size: 12px">Settings</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex my-4 justify-content-between">
            <div class="d-flex">
                <div class="mr-2"><img class="img-fluid" height="70" width="70"
                        src="{{ asset('general/imgs/user.png') }}" alt=""></div>
                <div class="mt-1">
                    <h3 class="account-sub-title d-flex mb-0" style="font-size: 16px">
                        <span
                            style="font-size: 16px; font-style: normal; font-weight: 700; font-family: 'Poppins'; font-size: 16px; line-height: 160%; color: #000000;">Obioma
                            JC</span>
                            @if (Auth::user()->verified_seller)
                            <img class="ml-2" src="{{ asset('general/imgs/icons/verified.svg') }}" alt="verified">
                            @endif
                    </h3>
                    <span
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Seller</span>
                </div>
            </div>

            <a href="#">
                <div class="p-3 shadow-sm border" style="background: rgb(0, 0, 0)">
                    <div class="text-center"
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                        24.5</div>
                    <div class="text-center text-sm"
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                        Total</div>
                    <div class="text-center text-sm"
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                        Point Value</div>
                </div>
            </a>
        </div>

        <div class="d-flex my-4 justify-content-between">
            <div class="d-flex">
                <div class="mr-5">
                    <div
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                        <ion-icon name="person-circle-outline"></ion-icon> 9843
                    </div>
                    <div
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                        Followers</div>
                </div>
                <div>
                    <div
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                        <ion-icon name="star-outline"></ion-icon> 4353
                    </div>
                    <div
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                        Rating</div>
                </div>
            </div>

            <div class="d-flex">
                {{-- group btn for Desktop --}}
                <button type="button" class="btn btn-sm bb-bg-btn mr-2" data-toggle="modal" data-target="#myModal" style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">
                    <i class="fa fa-plus"></i> Post New
                </button>
                <div class="btn-group hide-from-mobile mr-4">
                    <button class="btn btn-sm bb-bg-btn"
                        style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Sales</button>
                    <button class="btn btn-sm"
                        style="text-transform: capitalize; background: #CCCCCC; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Contracts</button>
                </div>
                <a href="#" class="btn btn-sm bb-bg-btn"
                    style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF; flex-grow: 0;">Find
                    Needs</a>
            </div>
        </div>

        {{-- group btn for Mobile --}}
        <div class="row show-only-mobile my-5">
            <div class="col-6 pr-0"><button class="btn btn-block w-5 btn-sm bb-bg-btn"
                    style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Sales</button>
            </div>
            <div class="col-6 pl-0"><button class="btn btn-block w-5 btn-sm"
                    style="text-transform: capitalize; background: #CCCCCC; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Contracts</button>
            </div>
        </div>

        {{-- session --}}
        @if (session('message'))
            {{-- alert --}}
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top: 6px">
              <span aria-hidden="true"><ion-icon name="close-circle-outline"></ion-icon></span>
            </button>
          </div>
        @endif
        
        <div class="row mt-5">
            @foreach ($products as $product)
            <div class="col-md-3 col-6">
                <a href="#" style="text-decoration: none">
                    <div class="card border-0">
                        <img src="/storage/{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                            @if ($product->publish == 0)
                            <div class="d-flex" style="text-transform:inherit; font-family: 'Poppins'; color: rgb(0, 0, 0); font-size: 12px; line-height: 16px; font-weight: 400; text-decoration: none;">
                                <ion-icon name="time-outline" style="margin-top: 2px; margin-right: 3px"></ion-icon> 
                                <span>In Review.</span>
                            </div>
                            @endif
                            <h5 class="card-title pl-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">{{ $product->title }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach   
        </div>
        
        <!-- The Modal -->
        @if (Auth::user()->can_post)
           <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
        
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"
                            style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; color: #ffffff;">
                            Post Product</h4>
                        <button type="button" class="close" data-dismiss="modal"><span style="color: #FFFFFF"><ion-icon name="close-circle" data-toggle="tooltip" data-placement="bottom" title="close"></ion-icon></span></button>
                    </div>
        
                    <form action="{{ route('seller.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                        
                                <div class="form-group col-md-12">
                                    <input type="title" class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}" id="title" name="title"
                                        aria-describedby="titleHelp" required placeholder="Category Name"
                                        style="border-radius: 0;">
        
                                    @if ($errors->has('title'))
                                        <div id="titleHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('title') }}</div>
                                        </div>
                                    @endif
                                </div>
        
        
                                <div class="col-md-12 form-group">
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                                        name="category_id" required>
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
        
        
                                <div class="col-md-12 form-group">
                                    <select class="form-control @error('subcategory_id') is-invalid @enderror"
                                        id="subcategory_id" name="subcategory_id" required>
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
        
        
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                        rows="3" placeholder="Write about your product" style="border-radius: 0;" required>{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <div id="descriptionHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('description') }}</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-12 mb-3">
                                    <input type="file" class="dropify @error('image') is-invalid @enderror" id="image"
                                        name="image" data-bs-height="245" required>
        
                                    @if ($errors->has('image'))
                                        <div id="imageHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('image') }}</div>
                                        </div>
                                    @endif
                                </div>
        
                                <div class="col-md-12 d-flex mb-2" id="addMore" onclick="myFunction();" style="cursor: pointer; user-select:none;">
                                    <img class="mr-3" src="{{ asset('general/imgs/icons/post.svg') }}" alt="">
                                    <span>Add more samples</span>
                                </div>
        
                                <div class="col-md-12" id="showMore" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <input type="file" class="dropify @error('thumbnail') is-invalid @enderror"
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
                                                <input type="file" class="dropify @error('thumbnail1') is-invalid @enderror"
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
                                                <input type="file" class="dropify @error('thumbnail2') is-invalid @enderror"
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
        
                        </div>
        
                        <!-- Modal footer -->
                        <div class="modal-footer border-0 justify-content-center pb-4 pt-1">
                            <button type="submit" class="btn px-3 py-2 bb-bg-btn btn-sm" style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; letter-spacing: -0.3px;">Post Product</button>
                        </div>
        
                    </form>
                </div>
            </div>
        </div> 
        @else

        <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
        
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"
                            style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; color: #ffffff;">
                            Post Product</h4>
                        <button type="button" class="close" data-dismiss="modal"><span style="color: #FFFFFF"><ion-icon name="close-circle" data-toggle="tooltip" data-placement="bottom" title="close"></ion-icon></span></button>
                    </div>

                    <div class="p-5">
                        <h4 style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; color: #000000;">You are not eligible to post.</h4>
                        <p>Please update your profile to post your product.</p>
                        <p class="mb-3">If you are logged in, kindly click the link below.</p>
                        <a href="{{ route('seller.settings') }}" class="btn bb-bg-btn btn-sm text-white">Setting up your profile here...</a>
                    </div>

                </div>
            </div>
        </div> 
        @endif
        
        


    </div>
    
</section>

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
<!-- End .section-1 -->
@endsection