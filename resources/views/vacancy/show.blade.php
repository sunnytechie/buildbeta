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
                            <div class="d-flex">
                                <img src="{{ asset('general/imgs/icons/ellipse.svg') }}" alt="Logo">
                                <h5 class="card-title mx-2 mt-2" style="font-family: 'Poppins'; color: #000000; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;">The SANDBOX</h5>
                            </div>
                            
                            <h5 class="card-title my-4" style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 20px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Achitectural Designer</h5>
                            <div style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #CCCCCC;"><span>. Contract</span> . <span>Full time</span> . <span>Remote</span></div>
                            
                            <div><a href="#" class="btn bb-bg-btn btn-md my-5 px-5" style="text-decoration: none; font-family: 'Poppins'; font-style: normal; font-weight: 600; font-size: 12px; line-height: 160%; letter-spacing: -0.015em; text-transform: uppercase; color: #FFFFFF; ">APPLY</a></div>
                            
                            <p class="card-text mb-3" style="font-family: 'Poppins'; font-style: normal; color: #000000; font-weight: 400; font-size: 12px; line-height: 160%;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia architecto aperiam unde, iusto non suscipit nesciunt cupiditate dolores animi iste culpa numquam nulla amet quaerat qui dolorem rerum, quisquam totam.</p>
                            
                            <h5 class="mt-3 mb-1" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Responsibilities</h5>
                            <p style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                Bachlors Degree in Architecture 
                                Five years of professional experience working in an architectural firm
                                Field experience 
                                Management skills 
                                Eye for clean design
                            </p>

                            <h5 class="mt-3 mb-1" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Requirements</h5>
                            <p style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                Bachlors Degree in Architecture 
                                Five years of professional experience working in an architectural firm
                                Field experience 
                                Management skills 
                                Eye for clean design
                            </p>
                        </div>
                </div>
            </div>

            
        </div>
    </div>            
    @endsection