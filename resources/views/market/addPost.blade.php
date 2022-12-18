<!-- MODAL EFFECTS -->
<div class="modal fade" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000;">New product</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    {{-- hidden publish = 1 --}}
                    <input type="hidden" name="publish" value="1">
                    {{-- image --}}
                    <div class="form-group">
                        <input 
                        type="file" 
                        class="dropify @error('image') is-invalid @enderror" 
                        id="image" 
                        name="image"  
                        data-bs-height="145">

                        @if ($errors->has('image'))
                            <div id="imageHelp" class="form-text text-danger">
                                <div>{{ $errors->first('image') }}</div>
                            </div>
                        @endif
                    </div>

                    <div class="d-flex mb-4">
                        <img class="me-3" src="{{ asset('general/imgs/icons/post.svg') }}" alt="">
                        <span>Add more</span>
                    </div>

                    <div class="form-group">
                        <input 
                        type="title" 
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}"
                        id="title" name="title" 
                        aria-describedby="titleHelp"
                        required
                        placeholder="Category Name" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                        
                        @if ($errors->has('title'))
                            <div id="titleHelp" class="form-text text-danger">
                                <div>{{ $errors->first('title') }}</div>
                            </div>
                        @endif
                    </div>

                    {{-- select category --}}
                    <div class="form-group">
                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
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
                        <select class="form-control @error('subcategory_id') is-invalid @enderror" id="subcategory_id" name="subcategory_id" required>
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
                        class="form-control @error('description') is-invalid @enderror" 
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