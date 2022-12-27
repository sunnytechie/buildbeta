@extends('layouts.app')
    @section('content')
    <style>
        .mobile-tab {
            display: none !important;
        }
    </style>
    <div class="my-5 mt-1">
        <div class="row">

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
    </div>            
    @endsection