@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Organize your Slider</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Slider</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <h3 class="card-title">Slider</h3>
                        <div class="ml-auto">
                            <a data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8" class="btn btn-primary btn-sm modal-effect"><i class="fa fa-plus"></i> Add new slider</a>
                        </div>
                        <!-- MODAL EFFECTS -->
                        <div class="modal fade" id="modaldemo8">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000;">New Slider</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
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

                                            {{-- tagline --}}
                                            <div class="form-group">
                                                <input 
                                                type="tagline" 
                                                class="form-control @error('tagline') is-invalid @enderror"
                                                value="{{ old('tagline') }}"
                                                id="tagline" name="tagline" 
                                                aria-describedby="taglineHelp"
                                                required
                                                placeholder="Tagline" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                
                                                @if ($errors->has('tagline'))
                                                    <div id="taglineHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('tagline') }}</div>
                                                    </div>
                                                @endif
                                            </div>

                                            {{-- button_link --}}
                                            <div class="form-group">
                                                <input 
                                                type="url" 
                                                class="form-control @error('button_link') is-invalid @enderror"
                                                value="{{ old('button_link') }}"
                                                id="button_link" name="button_link" 
                                                aria-describedby="button_linkHelp"
                                                placeholder="https://www.link.com" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                
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
                                                value="{{ old('button_text') }}"
                                                id="button_text" name="button_text" 
                                                aria-describedby="button_textHelp"
                                                placeholder="Button text" style="border: 1px solid rgb(63, 48, 197); border-radius: 0;">
                                                
                                                @if ($errors->has('button_text'))
                                                    <div id="button_textHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('button_text') }}</div>
                                                    </div>
                                                @endif
                                            </div>
                                            
                                            {{-- image --}}
                                            <div class="form-group">
                                                <input 
                                                type="file" 
                                                class="dropify @error('image') is-invalid @enderror"
                                                id="image" 
                                                name="image"  
                                                data-bs-height="145" required>

                                                @if ($errors->has('image'))
                                                    <div id="imageHelp" class="form-text text-danger">
                                                        <div>{{ $errors->first('image') }}</div>
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
                                        <th class="wd-15p border-bottom-0">Slider Title</th>
                                        <th class="wd-15p border-bottom-0">Status</th>
                                        <th class="wd-15p border-bottom-0">Tagline</th>
                                    
                                        <th class="wd-15p border-bottom-0">Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ $id++ }}</td>
                                            <td>{{ $slider->title }}</td>
                                            <td>
                                                @if ($slider->publish == 1)
                                                    <span class="btn btn-sm btn-success">Showing</span>
                                                @else
                                                    <span class="btn btn-sm btn-danger">Hidden</span>
                                                @endif
                                            </td>

                                            <td>{{ $slider->tagline }}</td>
                                            
                                            <td>{{ $slider->created_at->diffForHumans() }}</td>
                                            <td>
                                                {{-- group edit and delete Icon --}}
                                                <div class="btn-group">
                                                    {{-- edit --}}
                                                    <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Edit Slider"><i class="fe fe-edit"></i></a>                                                        
                                                   
                                                    @if($slider->publish == 0)
                                                    <form method="post" action="{{ route('slider.publish', $slider->id) }}">
                                                        @csrf
                                                    <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Publish" onclick="return confirm('Are you sure you want to publish this slider?')" class="btn btn-sm btn-success" style="border-radius: 0">
                                                        <i class="fe fe-eye"></i>
                                                    </button>
                                                    </form>
                                                    @else
                                                    <form method="post" action="{{ route('slider.unpublish', $slider->id) }}">
                                                        @csrf
                                                    <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Hide" onclick="return confirm('Are you sure you want to hide this slider?')" class="btn btn-sm text-white" style="border-radius: 0; background:rgb(197, 95, 48)">
                                                        <i class="fe fe-eye-off"></i>
                                                    </button>
                                                    </form>
                                                    @endif                                                    

                                                    <form method="post" action="{{ route('slider.destroy', $slider->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure you want to delete this slider?')" class="btn btn-sm btn-danger" style="border-top-left-radius: 0; border-bottom-left-radius: 0"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>

                                           
                                            
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