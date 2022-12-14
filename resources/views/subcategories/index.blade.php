@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Create, Update and <strike>delete</strike> Sub Category</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <h3 class="card-title">Main Product category</h3>
                        <div class="ml-auto">
                            <a data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8" class="btn btn-primary btn-sm modal-effect"><i class="fa fa-plus"></i> Add Category</a>
                        </div>
                        <!-- MODAL EFFECTS -->
                        <div class="modal fade" id="modaldemo8">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">New category</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form action="{{ route('subcategories.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
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

                                            {{-- belongs to category id --}}
                                            <div class="form-group">
                                                <select 
                                                class="form-control @error('category_id') is-invalid @enderror"
                                                value="{{ old('category_id') }}"
                                                id="category_id" name="category_id" 
                                                aria-describedby="category_idHelp"
                                                required
                                                placeholder="Category Name" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
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


                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Create Category</button> 
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
                                        <th class="wd-15p border-bottom-0">Sub Category Name</th>
                                        <th class="wd-15p border-bottom-0">Category Name</th>
                                        <th class="wd-15p border-bottom-0">Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                         @php
                                            $id = 1;
                                        @endphp
                                    @foreach ($subcategories as $subcategory)
                                        <tr>
                                            <td>{{ $id++ }}</td>
                                            <td>{{ $subcategory->title }}</td>
                                            <td>{{ $subcategory->category->title }}</td>
                                            <td>{{ $subcategory->created_at }}</td>
                                            <td>
                                               
                                                <div class="btn-group">
                                                    <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo{{ $subcategory->id }}" class="modal-effect btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                    <form method="post" action="{{ route('subcategories.destroy', $subcategory->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this subcategory?')" class="btn btn-sm btn-danger" style="border-top-left-radius: 0; border-bottom-left-radius: 0"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td> 

                                            <!-- Edit MODAL -->
                                             <div class="modal fade effect-scale" id="modaldemo{{ $subcategory->id }}">
                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                    <div class="modal-content modal-content-demo">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title">Edit subcategory</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form action="{{ route('subcategories.update', $subcategory->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <input 
                                                                type="title" 
                                                                class="form-control @error('title') is-invalid @enderror"
                                                                value="{{ $subcategory->title }}"
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

                                                            {{-- edit belongs to category id --}}
                                                            <div class="form-group">
                                                                <select 
                                                                class="form-control @error('category_id') is-invalid @enderror"
                                                                value="{{ old('category_id') }}"
                                                                id="category_id" name="category_id" 
                                                                aria-describedby="category_idHelp"
                                                                required
                                                                placeholder="Category Name" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                                    <option value="">Select Category</option>
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('category_id'))
                                                                    <div id="category_idHelp" class="form-text text-danger">
                                                                        <div>{{ $errors->first('category_id') }}</div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="submit">Save changes</button> <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- End Edit Modal -->
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