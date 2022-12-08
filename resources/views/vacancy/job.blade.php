@extends('layouts.app')
    @section('content')
    <style>
        .mobile-tab {
            display: none !important;
        }
    </style>
    <div class="my-5 mt-1">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow border-0">
                        <div class="card-body">
                            <img src="{{ asset('general/imgs/icons/ellipse.svg') }}" alt="Logo">
                            <h5 class="card-title" style="font-style: normal; font-weight: 600; font-size: 16px; line-height: 160%;">Card title</h5>
                            <h6 class="card-subtitle mb-2" style="font-style: normal; color: #000000; font-weight: 500; font-size: 14px; line-height: 160%;">Card subtitle</h6>
                            <p class="card-text mb-3" style="font-style: normal; color: #000000; font-weight: 400; font-size: 12px; line-height: 160%;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia architecto aperiam unde, iusto non suscipit nesciunt cupiditate dolores animi iste culpa numquam nulla amet quaerat qui dolorem rerum, quisquam totam.</p>
                           
                            <a href="#" class="card-link" style="font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">See more</a>
                        </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow border-0">
                        <div class="card-body">
                            <img src="{{ asset('general/imgs/icons/ellipse.svg') }}" alt="Logo">
                            <h5 class="card-title" style="font-style: normal; font-weight: 600; font-size: 16px; line-height: 160%;">Card title</h5>
                            <h6 class="card-subtitle mb-2" style="font-style: normal; color: #000000; font-weight: 500; font-size: 14px; line-height: 160%;">Card subtitle</h6>
                            <p class="card-text mb-3" style="font-style: normal; color: #000000; font-weight: 400; font-size: 12px; line-height: 160%;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia architecto aperiam unde, iusto non suscipit nesciunt cupiditate dolores animi iste culpa numquam nulla amet quaerat qui dolorem rerum, quisquam totam.</p>
                           
                            <a href="#" class="card-link" style="font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">See more</a>
                        </div>
                </div>
            </div>
            
        </div>
    </div>            
    @endsection