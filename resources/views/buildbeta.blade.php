@extends('layouts.app')
    @section('content')
    <div class="row hide-from-mobile">
        @include('market.slide')
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