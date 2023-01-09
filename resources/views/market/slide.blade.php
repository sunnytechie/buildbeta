
    <div class="col-lg-9 col-md-12 mb-2">
        <div class="home-slider owl-carousel owl-theme owl-carousel-lazy h-100 slide-animate"
            data-owl-options="{
            'dots': true,
            'nav': false,
            'autoplay': true,
            'duration': 200
        }">
        @foreach ($sliders as $slider)
            
            <div class="home-slide home-slide1 banner banner-md-vw h-100">
                <figure>
                    <img class="slide-bg" src="/storage/{{ $slider->image }}"
                        style="background-color: #555;" alt="slider image" width="835" height="445">
                </figure>

                <div class="banner-layer banner-layer-middle intro-banner mt-5">
                    <div class="appear-animate" data-animation-name="fadeInLeftShorter"
                        data-animation-delay="200">
                        <h4 class="text-white">{{ $slider->title }}</h4>
                        <h2 class="text-white m-b-1">{{ $slider->tagline }}</h2>
                        {{-- <h3 class="text-white text-uppercase m-b-3">{{ $slider->promo_price }} Off</h3>
                        <h5
                            class="text-white text-uppercase d-inline-block mb-1 pb-1 ls-n-20 align-text-bottom">
                            Starting At
                            <b class="coupon-sale-text bg-secondary text-white d-inline-block">$
                                <em>199</em>99</b>
                        </h5> --}}
                            <a href="{{ $slider->button_link }}" class="btn bb-bg-btn btn-md ls-10 align-bottom">{{ $slider->button_text }}</a>
                    </div>
                </div>
                <!-- End .banner-layer -->
            </div>
            <!-- End .home-slide -->
        @endforeach

        </div>
        <!-- End .home-slider -->
    </div>
    <!-- End .col-lg-9 -->

    <div class="col-lg-3 top-banners">
        <div class="row">
            <div class="col-md-4 col-lg-12">
                @foreach ($take2Slides as $slider)
                <div class="banner banner1 banner-md-vw-large banner-sm-vw-large mb-2">
                    <figure>
                        <img src="/storage/{{ $slider->image }}"
                            style="background-color: #ccc;" alt="banner" width="264" height="133">
                    </figure>
                    {{-- <div class="banner-layer banner-layer-middle text-right">
                        <h3 class="m-b-2">Buildings and Arc</h3>
                        <h4 class="text-secondary text-uppercase">Starting at $99</h4>
                        <a href="#" class="text-dark text-uppercase ls-10 py-1">Real Deal
                        </a>
                    </div> --}}
                </div>
                @endforeach
                <!-- End .banner -->

                
            </div>
            
        </div>
    </div>
    <!-- End .col-lg-3 -->
