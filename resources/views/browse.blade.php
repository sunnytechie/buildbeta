@extends('layouts.app')
    @section('content')
    <div class="my-5 mt-1">
        <div class="row">
            <div class="col-md-3 col-4">
                {{-- <a href="{{ route('market') }}" class="btn btn-dark btn-block btn-lg px-0 ls-10">Back</a> --}}
                {{-- list of product category --}}
                <div class="side-menu-wrapper border-0">    
                    <div class="side-menu-body">
                        <ul class="side-menu pb-1 active-border">
                            <li class="active border-start border-primary"><a class="border-0" href="#">Designs</a></li>
                            <li><a class="border-0" href="#">Interiors</a></li>
                            <li><a class="border-primary" href="#">Buildings</a></li>
                            <li><a class="border-0" href="#">Building Artisans</a></li>
                            <li><a class="border-0" href="#">Bilding Services</a></li>
                            <li><a class="border-0" href="#">Building Materials</a></li>
                        </ul>

                    </div>
                    <!-- End .side-menu-body -->
                </div>
            </div>

            <div class="col-md-9 col-8">
                <div class="d-flex justify-content-between mb-1">
                    <div class="title text-black">Interior Designs</div>
                    <div class="link" style="color: #0080E6"><a href="#">See More</a></div>
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
                </div>
            </div>

        </div>
    </div>            
    @endsection