@extends('layouts.app')
    @section('content')
    <style>
        .mobile-tab {
            display: none !important;
        }
    </style>
    <div class="my-5 mt-1">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="card border-0">
                    <img src="{{ asset('general/imgs/products/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                            <a href="#" class="py-2 px-0 btn" style="color: #ccc; font-size: 14px; text-transform:capitalize; line-height: 16px; font-weight: 400; text-decoration: none">Buildbeta</a>
                        <h5 class="card-title">Product title</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border-0">
                    <img src="{{ asset('general/imgs/products/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                            <a href="#" class="py-2 px-0 btn" style="color: #ccc; font-size: 14px; text-transform:capitalize; line-height: 16px; font-weight: 400; text-decoration: none">Buildbeta</a>
                        <h5 class="card-title">Product title</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    @endsection