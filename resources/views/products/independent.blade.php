<section class="featured-products-section">
    <div class="container">
        <h2 class="section-title my-3 mt-1" style="font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%; text-transform:capitalize">Category 2</h2>

        <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center"
            data-owl-options="{
            'dots': false,
            'nav': true
        }">
        @foreach ($productWithId2 as $product)
            <div class="product-default appear-animate shadow-md" data-animation-name="fadeInRightShorter">

                <figure class="mb-0">
                    <a href="#">
                        <img src="/storage/{{ $product->image }}" alt="product">
                    </a>
                    {{-- <div class="label-group">
                        <div class="product-label label-hot">HOT</div>
                        <div class="product-label label-sale">-20%</div>
                    </div> --}}
                </figure>
                <button class="btn p-1" style="position: absolute; margin-top: -30px; margin-left: 8px; background: #0080E6; color: #fff; line-height: 16px; font-size: 10px; text-transform: capitalize; font-weight: 600">{{ $product->category_title }}</button>

                <div class="category-tag d-flex justify-content-between">
                    <a href="#" class="p-2 btn" style="text-transform:inherit; font-family: 'Poppins'; color: #ccc; font-size: 12px; line-height: 16px; font-weight: 400;">Independent Seller</a>
                    <div class="p-2 d-flex justify-content-center" style="font-size: 10px; color: #0080E6"><ion-icon name="shield-checkmark-outline" style="margin-top: 2px; margin-right: 3px"></ion-icon> <span>Verified</span></div>
                </div>

                <div class="justify-content-start p-2 pb-4" style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                    {{ $product->title }}
                </div>
                <!-- End .product-details -->
            </div>
        @endforeach

            
        </div>
        <!-- End .featured-proucts -->
    </div>
</section>
