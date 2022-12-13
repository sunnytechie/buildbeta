@extends('layouts.app')
    @section('content')
    <div class="row hide-from-mobile">
        <div class="col-lg-3 mb-2 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200" data-animation-duration="1000">
            <div class="side-menu-wrapper">
                <h2 class="side-menu-title ls-10">Top Categories</h2>

                <div class="side-menu-body mb-2 px-3 mx-3">
                    <ul class="side-menu pb-1">
                        <li><a href="#"><ion-icon name="albums-outline" class="mr-2"></ion-icon> Designs</a></li>
                        <li><a href="#"><ion-icon name="business-outline" class="mr-2"></ion-icon> Constructions</a></li>
                        <li><a href="#"><ion-icon name="briefcase-outline" class="mr-2"></ion-icon> Properties</a></li>
                        <li><a href="#"><ion-icon name="compass-outline" class="mr-2"></ion-icon> Lands</a></li>
                        <li><a href="#"><ion-icon name="podium-outline" class="mr-2"></ion-icon> Services</a></li>
                        <li><a href="#"><ion-icon name="people-outline" class="mr-2"></ion-icon> Artisans</a></li>
                        <li><a href="#"><ion-icon name="people-outline" class="mr-2"></ion-icon> Others</a></li>
                    </ul>

                    {{-- <a href="#" class="btn btn-block btn-dark btn-lg px-0 ls-10">Huge Deal -
                        <strong>25%</strong>
                        Off</a> --}}
                </div>
                <!-- End .side-menu-body -->
            </div>
            <!-- End .side-custom-menu -->
        </div>
        <!-- End .col-lg-3 -->

        @include('market.slide')
        <!-- End .col-lg-9 -->
    </div>
    <!-- End .row -->


    <div class="info-boxes-container row row-joined mb-1 appear-animate hide-from-mobile" data-animation-name="fadeInUpShorter" data-animation-duration="1000">
        <div class="info-box info-box-icon-left col-lg-4">
            <i class="icon-money"></i>
            
            <div class="info-box-content">
                <h4>SECURE ESCROW SYSTEM</h4>
                <p class="text-body">Guarantee that the service is delivered</p>
            </div>
            <!-- End .info-box-content -->
        </div>
        <!-- End .info-box -->

        <div class="info-box info-box-icon-left col-lg-4">
            <i class="icon-shipping"></i>

            <div class="info-box-content">
                <h4>PROFESSIONAL SERVICE PROVIDERS</h4>
                <p class="text-body">TA Verified service providers</p>
            </div>
            <!-- End .info-box-content -->
        </div>
        <!-- End .info-box -->

        <div class="info-box info-box-icon-left col-lg-4">
            <i class="icon-support"></i>

            <div class="info-box-content">
                <h4>ONLINE SUPPORT 24/7</h4>
                <p class="text-body">Communicate with us anytime.</p>
            </div>
            <!-- End .info-box-content -->
        </div>
        <!-- End .info-box -->
    </div>
    <!-- End .info-boxes-container -->

    
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