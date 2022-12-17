@extends('layouts.app')
    @section('content')
    <style>
        .mobile-tab {
            display: none !important;
        }
    </style>
        <div class="row">
            <div class="col-md-4">
               Search for a product
            </div>

            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-baseline>
                                <img src="{{ asset('general/imgs/icons/user.svg') }}" alt="User">
                                <p class="ml-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">John Doe</p>
                            </div>
                            <div>
                                {{-- dropdown --}}
                                <div class="dropdown">
                                    <button class="btn btn-default bg-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="{{ asset('general/imgs/icons/dropmenu.svg') }}" alt="">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="py-2 dropdown-item" href="#" style="text-decoration: none; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Contact now</a>
                                      <a class="py-2 dropdown-item" href="#" style="text-decoration: none; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">View info</a>
                                      <a class="py-2 dropdown-item" href="#" style="text-decoration: none; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Share</a>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <h5 class="card-title" style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 24px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Solar Panels</h5>

                            <p style="font-family: 'Poppins'; font-style: normal; font-size: 14px; font-weight: 400; line-height: 160%; letter-spacing: -0.3px;">40 days left</p>
                        </div>

                        <div class="mb-3">
                            <img class="img-fluid img-responsive" src="{{ asset('general/imgs/icons/rectangle.svg') }}" alt="">
                        </div>

                        <div>
                            <div class="d-flex justify-content-between">
                                <div><p style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; color: #CCCCCC;">Purchase Purpose </p></div>
                                <div><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">For Distribution</span></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div><p style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; color: #CCCCCC;">Terms of Payment </p></div>
                                <div><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;"> - </span></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div><p style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; color: #CCCCCC;">Delivery address </p></div>
                                <div><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">8, Meji-ogbe street Eyita ikorodu, Lagos</span></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div><p style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; color: #CCCCCC;">Duration Deadline </p></div>
                                <div><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">40 days left</span></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div><p style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; color: #CCCCCC;">Country </p></div>
                                <div><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Nigeria</span></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div><p style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; color: #CCCCCC;">Number of Quotation </p></div>
                                <div><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">400</span></div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button class="btn btn-md bb-bg-btn">QUOTE</button>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    @endsection