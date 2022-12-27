@extends('layouts.app')
    @section('content')
    <div class="my-5 mt-1">
        <div class="row">
            <div class="col-md-2 col-4 hide-from-mobile">
                {{-- <a href="{{ route('market') }}" class="btn btn-dark btn-block btn-lg px-0 ls-10">Back</a> --}}
                {{-- list of product category --}}
                <div class="side-menu-wrapper border-0">    
                    <div class="side-menu-body">
                        <ul class="side-menu pb-1 active-border">
                            <li class="active"><a class="border-0 border-start border-primary" href="#" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 120%; letter-spacing: -0.3px;color: #0080E6;">Designs</a></li>
                            <li><a class="border-0" href="#" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 120%;letter-spacing: -0.3px; color: #000000;">Interiors</a></li>
                        </ul>

                    </div>
                    <!-- End .side-menu-body -->
                </div>
            </div>

            <div class="col-md-10 col-8">
                <div class="d-flex justify-content-between mt-1 mb-1">
                    <div class="title text-black" style="font-family: 'Poppins'; font-style: normal; font-weight: 600; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Interior Designs</div>
                    <div class="link" style="color: #0080E6"><a href="#" style="font-family: 'Poppins'; font-style: normal; font-weight: 600; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #0080E6;">See More</a></div>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4 col-6">
                        <a href="#">
                            <div class="card border-0">
                                <img src="{{ $product->image }}" class="card-img-top" alt="...">
                                <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                                    <h5 class="card-title" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Product title</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>            
    @endsection