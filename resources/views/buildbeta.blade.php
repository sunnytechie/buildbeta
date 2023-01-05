@extends('layouts.app')
@section('content')
    <div class="row hide-from-mobile">
        @include('market.slide')
    </div>
    <!-- End .row -->

    <div class="row gap-2 mb-1 appear-animate hide-from-mobile" data-animation-name="fadeInUpShorter"
        data-animation-duration="1000">
        <div class="col-md-6">
            <div class="info-box-content pt-2" style="background: rgb(243, 238, 238)">
                <div class="d-flex justify-content-between">
                    <h4 class="px-2 mb-0" style="font-family: 'Poppins'; font-size: 14px; padding: 5px;">Product Requirement
                    </h4>
                    <div class="pt-1 px-4"><a href="#" style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #0080E6;">View more</a></div>
                </div>

                {{-- Loop list of 3 --}}
                <div class="requirement-bg px-2 py-2">
                    <a href="#">
                        <div class="text-body"
                            style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                            Guarantee that the service is delivered</div>
                        <div class="d-flex justify-content-between">
                            <div
                                style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                Category Name</div>
                            <div class="px-4 d-flex"
                                style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #737373;">
                                <div class="mx-2">
                                    <ion-icon name="eye-outline"></ion-icon> 100 views
                                </div>
                                <div class="mx-2">
                                    <ion-icon name="hourglass-outline"></ion-icon> 20 days left
                                </div>
                                <div class="mx-2">
                                    <ion-icon name="flag-outline"></ion-icon> Nigeria
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- End loop --}}

            </div><!-- End .info-box-content -->
        </div><!-- End .info-box -->


        <div class="col-md-6">
            <div class="info-box-content pt-2" style="background: rgb(243, 238, 238)">
                <div class="d-flex justify-content-between">
                    <h4 class="px-2 mb-0" style="font-family: 'Poppins'; font-size: 14px; padding: 5px;">Design Requirement
                    </h4>
                    <div class="pt-1 px-4"><a href="#"
                            style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #0080E6;">View
                            more</a></div>
                </div>

                {{-- Loop list of 3 --}}
                <div class="requirement-bg px-2 py-2">
                    <a href="#">
                        <div class="text-body"
                            style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                            Guarantee that the service is delivered</div>
                        <div class="d-flex justify-content-between">
                            <div
                                style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                Category Name</div>
                            <div class="px-4 d-flex"
                                style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #737373;">
                                <div class="mx-2">
                                    <ion-icon name="eye-outline"></ion-icon> 100 views
                                </div>
                                <div class="mx-2">
                                    <ion-icon name="hourglass-outline"></ion-icon> 20 days left
                                </div>
                                <div class="mx-2">
                                    <ion-icon name="flag-outline"></ion-icon> Nigeria
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- End loop --}}

            </div><!-- End .info-box-content -->
        </div><!-- End .info-box -->
    </div><!-- End .info-boxes-container -->

    <div class="gap-2 mb-1 appear-animate show-only-mobile home-need-tab" data-animation-name="fadeInUpShorter"
        data-animation-duration="1000">
        <div class="my-1" style="font-family: 'Poppins'; font-size: 14px; font-weight: 600; color: #000000">Recommended Needs</div>
        <ul class="nav mb-0" id="pills-tab" role="tablist">
            <li class="nav-item w-50 text-center">
              <a class="nav-link py-3 active px-0" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                <h4 class="mb-0" style="font-family: 'Poppins'; font-size: 14px; font-weight: 500">Product Requirement
                </h4>
              </a>
            </li>
            <li class="nav-item w-50 text-center">
              <a class="nav-link py-3 px-0" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                <h4 class="mb-0" style="font-family: 'Poppins'; font-size: 14px; font-weight: 500">Design Requirement
                </h4>
              </a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent" style="border-bottom: 1px solid rgb(243, 238, 238) !important;">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                {{-- loop list of 3 --}}
                <div class="py-2" style="border-top: 1px solid rgb(243, 238, 238) !important;">
                    <a href="#">
                        <div class="text-body"
                            style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                            Guarantee that the service is delivered</div>
                        <div class="d-flex justify-content-between">
                            <div
                                style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                Category Name</div>
                            <div class="px-4 d-flex"
                                style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #737373;">
                                <div class="mx-2">
                                    <ion-icon name="eye-outline"></ion-icon> 100 views
                                </div>
                                <div class="mx-2">
                                    <ion-icon name="hourglass-outline"></ion-icon> 20 days left
                                </div>
                                <div class="mx-2">
                                    <ion-icon name="flag-outline"></ion-icon> Nigeria
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- end loop --}}
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                {{-- loop list of 3 --}}
                <div class="py-2" style="border-top: 1px solid rgb(243, 238, 238) !important;">
                    <a href="#">
                        <div class="text-body"
                            style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                            Guarantee that the service is delivered</div>
                        <div class="d-flex justify-content-between">
                            <div
                                style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                Category Name</div>
                            <div class="px-4 d-flex"
                                style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #737373;">
                                <div class="mx-2">
                                    <ion-icon name="eye-outline"></ion-icon> 100 views
                                </div>
                                <div class="mx-2">
                                    <ion-icon name="hourglass-outline"></ion-icon> 20 days left
                                </div>
                                <div class="mx-2">
                                    <ion-icon name="flag-outline"></ion-icon> Nigeria
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- end loop --}}
                
            </div>
          </div>
    </div><!-- End .info-boxes-container -->



    <div class="mt-mobile-only">
        {{-- featured --}}
        @include('products.recommended')

        {{-- ta blade --}}
        @include('products.ta')

        {{-- associate blade --}}
        @include('products.associate')

        {{-- independent blade --}}
        @include('products.independent')
    </div>
@endsection
