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
                        <h5 class="card-title" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Solar Panels</h5>

                        <button class="btn btn-sm bb-bg-btn mb-1">Quote</button>
                      </div>
                        {{-- divider --}}
                        <div class="mb-1" style="height: 0px; border: 0.1rem solid #eaeaea;"></div>
                        {{-- divider --}}
                        <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #CCCCCC;">For Distribution</h6>
                      
                        <div class="d-flex justify-content-between">
                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Location</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Nigeria</p>
                            </div>

                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Duration</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">40 days left</p>
                            </div>

                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">No. of Quotation</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">400</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Solar Panels</h5>
                        {{-- divider --}}
                        <div class="mb-1" style="height: 0px; border: 0.1rem solid #eaeaea;"></div>
                        {{-- divider --}}
                        <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #CCCCCC;">For Distribution</h6>
                      
                        <div class="d-flex justify-content-between">
                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Location</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Nigeria</p>
                            </div>

                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Duration</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">40 days left</p>
                            </div>

                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">No. of Quotation</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">400</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Solar Panels</h5>
                        {{-- divider --}}
                        <div class="mb-1" style="height: 0px; border: 0.1rem solid #eaeaea;"></div>
                        {{-- divider --}}
                        <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #CCCCCC;">For Distribution</h6>
                      
                        <div class="d-flex justify-content-between">
                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Location</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Nigeria</p>
                            </div>

                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Duration</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">40 days left</p>
                            </div>

                            <div>
                                {{-- header --}}
                                <h6 class="card-subtitle mb-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">No. of Quotation</h6>
                                {{-- header --}}
                                <p class="card-text" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">400</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection