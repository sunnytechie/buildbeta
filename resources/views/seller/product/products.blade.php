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
</style>
<section class="section-1" style="min-height: 60vh">
    <div class="dashboard-content mb-5">
        <div class="d-flex mb-5 justify-content-between">
            <h3 class="account-sub-title d-md-block mt-3" style="font-size: 20px">My Products</h3>

            <div class="d-flex mt-3">
                <span class="mr-5"><img src="{{ asset('general/imgs/icons/history.svg') }}"
                        alt="History"></span>
                <span><img src="{{ asset('general/imgs/icons/cart.svg') }}" alt=""></span>
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
                        <img class="verified-tag ml-2" draggable="false" src="{{ asset('general/imgs/icons/verified.svg') }}"
                            alt="">
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
        
        <div class="row mt-5">
            @foreach ($products as $product)
            <div class="col-md-3 col-6">
                <a href="#" style="text-decoration: none">
                    <div class="card border-0">
                        <img src="{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                            <a href="#" class="p-2 btn" style="text-transform:inherit; font-family: 'Poppins'; color: #ccc; font-size: 12px; line-height: 16px; font-weight: 400; text-decoration: none;">BuildBeta</a>
                            <h5 class="card-title pl-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">{{ $product->title }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach   
        </div>
        
        
        
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
        
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"
                            style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000;">
                            Post Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
        
                    <form action="#">
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <input type="file" class="dropify @error('image') is-invalid @enderror" id="image"
                                        name="image" data-bs-height="145">
        
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
                                                <input type="file" class="dropify @error('image') is-invalid @enderror"
                                                    id="image" name="image" data-bs-height="100">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <input type="file" class="dropify @error('image') is-invalid @enderror"
                                                    id="image" name="image" data-bs-height="100">
                                            </div>
                                        </div>
        
                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <input type="file" class="dropify @error('image') is-invalid @enderror"
                                                    id="image" name="image" data-bs-height="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
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
                                        rows="3" placeholder="Description" style="border-radius: 0;" required>{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <div id="descriptionHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('description') }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
        
                        </div>
        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn w-100 p-3 bb-bg-btn" style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; letter-spacing: -0.3px;">Post Product</button>
                        </div>
        
                    </form>
                </div>
            </div>
        </div>
        


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