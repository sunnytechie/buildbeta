<div class="d-flex my-5 justify-content-between">
    <h3 class="account-sub-title d-md-block" style="font-size: 20px">Your Products</h3>

    <div class="d-flex mt-1">
        <button type="button" class="btn btn-md bb-bg-btn" data-toggle="modal" data-target="#myModal"
            style="margin: -12px 15px 0 0">
            <i class="fa fa-plus"></i> Add new product
        </button>
        <span class="mr-5"><img src="{{ asset('general/imgs/icons/history.svg') }}" alt="History"></span>
        <span><img src="{{ asset('general/imgs/icons/cart.svg') }}" alt=""></span>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-6">
        <div class="card border-0">
            <img src="{{ asset('general/imgs/products/1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                <h5 class="card-title">Product title</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-6">
        <div class="card border-0">
            <img src="{{ asset('general/imgs/products/1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                <h5 class="card-title">Product title</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-6">
        <div class="card border-0">
            <img src="{{ asset('general/imgs/products/1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                <h5 class="card-title">Product title</h5>
            </div>
        </div>
    </div>
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

                        <div class="col-md-12 d-flex mb-2">
                            <img class="mr-3" src="{{ asset('general/imgs/icons/post.svg') }}" alt="">
                            <span>Add more</span>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="dropify @error('image') is-invalid @enderror"
                                            id="image" name="image" data-bs-height="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="dropify @error('image') is-invalid @enderror"
                                            id="image" name="image" data-bs-height="100">
                                    </div>
                                </div>

                                <div class="col-md-12 d-flex mb-2">
                                    <img class="mr-3" src="{{ asset('general/imgs/icons/post.svg') }}" alt="">
                                    <span>Add more</span>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="dropify @error('image') is-invalid @enderror"
                                            id="image" name="image" data-bs-height="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                    <button type="submit" class="btn w-100 btn-md bb-bg-btn">Post Product</button>
                </div>

            </form>
        </div>
    </div>
</div>
