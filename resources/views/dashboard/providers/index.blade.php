@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Create, Update and <strike>delete</strike> Category</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service Provider type</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <h3 class="card-title">Seller/Service Provider Type</h3>
                        <div class="ml-auto">
                            <a data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8" class="btn btn-primary btn-sm modal-effect"><i class="fa fa-plus"></i> Add Category</a>
                        </div>
                        <!-- MODAL EFFECTS -->
                        <div class="modal fade" id="modaldemo8">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">New Service</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form action="{{ route('providers.store') }}" method="POST">
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
                                                placeholder="Service provider title" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                @if ($errors->has('title'))
                                                    <div id="titleHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('title') }}</div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- description --}}
                                            <div class="form-group">
                                                <textarea 
                                                class="form-control @error('description') is-invalid @enderror"
                                                value="{{ old('description') }}"
                                                id="description" name="description" 
                                                aria-describedby="descriptionHelp"
                                                required
                                                placeholder="Service provider description" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;"></textarea>
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


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th class="wd-15p border-bottom-0">Service Type</th>
                                        <th class="wd-15p border-bottom-0">Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                    @foreach ($providers as $provider)
                                        <tr>
                                            <td>{{ $id++ }}</td>
                                            <td>{{ $provider->title }}</td>
                                            <td>{{ $provider->created_at->diffForHumans() }}</td>
                                            <td>
                                                {{-- group edit and delete Icon --}}
                                                <div class="btn-group">
                                                    <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo{{ $provider->id }}" class="modal-effect btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                    <form method="post" action="{{ route('providers.destroy', $provider->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this provider?')" class="btn btn-sm btn-danger" style="border-top-left-radius: 0; border-bottom-left-radius: 0"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>

                                            <!-- MODAL EFFECTS -->
                                            <div class="modal fade effect-scale" id="modaldemo{{ $provider->id }}">
                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                    <div class="modal-content modal-content-demo">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title">Edit service provider</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form action="{{ route('providers.update', $provider->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <input 
                                                                type="title" 
                                                                class="form-control @error('title') is-invalid @enderror"
                                                                value="{{ $provider->title, old('title') }}"
                                                                id="title" name="title" 
                                                                aria-describedby="titleHelp"
                                                                required
                                                                placeholder="Provider Name" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                                @if ($errors->has('title'))
                                                                    <div id="titleHelp" class="form-text text-danger">
                                                                        <div>{{ $errors->first('title') }}</div>
                                                                    </div>
                                                                @endif
                                                            </div> 

                                                            <div class="form-group">
                                                                <textarea 
                                                                class="form-control @error('description') is-invalid @enderror"
                                                                value="{{ $provider->description, old('description') }}"
                                                                id="description" name="description" 
                                                                aria-describedby="descriptionHelp"
                                                                required
                                                                placeholder="Service provider description" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">{{ $provider->description }}</textarea>
                                                                @if ($errors->has('description'))
                                                                    <div id="descriptionHelp" class="form-text text-danger">
                                                                        <div>{{ $errors->first('description') }}</div>
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