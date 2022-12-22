<header class="header" style="background-color: #0080E6">
    <div class="hide-from-mobile" style="background-color: #0080E6">
        <div class="container">
            <div class="header-top d-flex align-items-center w-100">
                <div class="header-left">
                    <p class="top-message ls-0 text-uppercase text-white d-none d-sm-block">...Real people real deal.</p>
                </div>
                <!-- End .header-left -->

                <div class="header-right header-dropdowns w-sm-100">
                    <div class="header-dropdown dropdown-expanded d-none d-lg-block mr-2">
                        <a href="#">Links</a>
                        <div class="header-menu">
                            <ul>
                                @if (Auth::check())
                                    @if (Auth()->user()->is_admin)
                                    <li><a href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                                    @endif
                                @endif
                                
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Get the App</a></li>
                                {{-- <li><a href="wishlist.html">My Wishlist</a></li> --}}
                                {{-- <li><a href="#" class="login-link">Log In</a></li> --}}
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->

                    <span class="separator"></span>

                    <div class="header-dropdown">
                        <a href="#"><i class="flag-us flag"></i>ENG</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                </li>
                                <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->

                    <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                        <a href="#">USD</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">NGN</a></li>
                                <li><a href="#">USD</a></li>
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->

                    <span class="separator"></span>

                    <div class="social-icons">
                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                        <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                    </div>
                    <!-- End .social-icons -->
                </div>
                <!-- End .header-right -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-top -->

        <div class="header-middle py-3 sticky-header" data-sticky-options="{'mobile': true}">
            <div class="container">
                <div class="header-left col-lg-2 w-auto pl-0">
                    <button class="mobile-menu-toggler mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="/" class="logo">
                        <img height="30px" width="30px" src="{{ asset('general/imgs/icons/logo.svg') }}" alt="">
                        {{-- <img src="{{ asset('general/imgs/BUILDBETA_LOGO_4_PNG.png') }}" alt="Buildbeta"> --}}
                    </a>
                </div>
                <!-- End .header-left -->

                {{-- Tablet and Mobile --}}
                <div class="header-right w-lg-max ml-0 px-0">

                    <div class="header-icon mb-0 show-only-mobile">
                        <a href="#" role="button" title="Search"><i
                            class="icon-search-3 mx-2"></i></a>
                    </div>
                        <!-- End .header-icon -->

                    <div class="header-icon mb-0 header-search first-header header-search-inline header-search-category w-lg-max pl-3 pr-1">
                        <a href="#" class="search-toggle" role="button" title="Search"><i
                                class="icon-search-3"></i></a>
                        <form action="#" method="get" style="width: 600px">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control first-input" name="q" id="qq" placeholder="Search..." required style="background: transparent; border: 0.2rem solid #FFFFFF; color: #FFF; border-radius: 0;">
                                <div class="select-custom">
                                    <select id="category" name="cat">
                                        <option>All Categories</option>
                                        <option>Constructions</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                                <button class="btn btn-icon icon-magnifier pb-1 bg-white" type="submit" title="Search"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->

                    <div class="header-contact d-none d-lg-flex pl-0 ml-3 mr-xl-4">
                    <div class="header-icon mb-0">
                        <a href="#">
                            <ion-icon name="duplicate-outline" style="font-size: 22px"></ion-icon>
                        </a>
                    </div>
                    
                    <div class="header-icon mb-0">
                        <a href="#">
                            <ion-icon name="notifications-outline" style="font-size: 22px"></ion-icon>
                        </a>
                    </div>
                    </div>
                    
                    @if (Auth::guest())
                    <a href="{{ route('login') }}" class="header-icon d-inline-block" title="Login">
                        <ion-icon name="log-in-outline" style="font-size: 22px">></ion-icon>
                    </a>
                    @else
                    <div class="dropdown profile-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer">
                            <img height="40" width="40" class="rounded-circle" src="{{ asset('general/imgs/black-man-4699506_1920.jpg') }}" alt="">
                        </div>
                        
                        <div class="dropdown-menu shadow-md">
                            <div class="px-4 py-2">
                                <img height="25" width="25" class="rounded-circle" src="{{ asset('general/imgs/black-man-4699506_1920.jpg') }}" alt="">
                                <br><span style="font-size: 14px; font-weight:500; line-height: 1px">{{ Auth::user()->name }}</span><br>
                                <span>{{ Auth::user()->email }}</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('seller.dashboard', Auth::user()->id) }}">Dashboard</a>
                            <a class="dropdown-item" href="#"><ion-icon name="chatbubbles-outline"></ion-icon> Help center</a>
                            <a class="dropdown-item" href="#"><ion-icon name="cloud-download-outline"></ion-icon> Get the App</a>
                            <a class="dropdown-item" href="#"><ion-icon name="share-social-outline"></ion-icon> Share</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><ion-icon name="power-outline"></ion-icon> Logout</a>
                        </div>
                        
                    </div>
                    @endif

                    

                </div>
                <!-- End .header-right -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-middle -->

        {{-- Desktop --}}
        <div class="header-bottom hide-from-dashboard sticky-header d-lg-block d-none" data-sticky-options="{'mobile': false}">
            <div class="container">
                <div class="header-left">
                    <a href="#" class="logo">
                        {{-- <img src="{{ asset('general/imgs/BUILDBETA_LOGO_4_PNG.png') }}" alt="buildbeta Logo"> --}}
                        <img height="30px" width="30px" src="{{ asset('general/imgs/icons/logo.svg') }}" alt="">
                    </a>
                </div>
                <div class="header-center">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li><a href="#">Products</a></li>
                            <li>
                                <a href="demo2-shop.html">Categories</a>
                                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 1</a>
                                            <ul class="submenu">
                                                <li><a href="#">Sub category 1</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 2</a>
                                            <ul class="submenu">
                                                <li><a href="#">Sub category 1</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 3</a>
                                            <ul class="submenu">
                                                <li><a href="#">Sub category 1</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                                <li><a href="#">Sub category xx</a></li>
                                            </ul>
                                        </div>
                                        {{-- <div class="col-lg-4 p-0">
                                            <div class="menu-banner">
                                                <figure>
                                                    <img src="assets/images/menu-banner.jpg" alt="Menu banner" width="300" height="300">
                                                </figure>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                        <i>OFF</i>
                                                    </h4>
                                                    <a href="demo2-shop.html" class="btn btn-sm btn-dark">SHOP
                                                        NOW</a>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <!-- End .megamenu -->
                            </li>
                            <li><a href="#">Designs</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Properties</a></li>

                            {{-- <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="demo2-about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="demo2-contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li> --}}


                            {{-- <li>
                                <a href="#">Elements</a>
                                <ul class="custom-scrollbar">
                                    <li><a href="element-accordions.html">Accordion</a></li>
                                    <li><a href="element-alerts.html">Alerts</a></li>
                                    <li><a href="element-animations.html">Animations</a></li>
                                    <li><a href="element-banners.html">Banners</a></li>
                                    <li><a href="element-buttons.html">Buttons</a></li>
                                    <li><a href="element-call-to-action.html">Call to Action</a></li>
                                    <li><a href="element-countdown.html">Count Down</a></li>
                                    <li><a href="element-counters.html">Counters</a></li>
                                    <li><a href="element-headings.html">Headings</a></li>
                                    <li><a href="element-icons.html">Icons</a></li>
                                    <li><a href="element-info-box.html">Info box</a></li>
                                    <li><a href="element-posts.html">Posts</a></li>
                                    <li><a href="element-products.html">Products</a></li>
                                    <li><a href="element-product-categories.html">Product Categories</a></li>
                                    <li><a href="element-tabs.html">Tabs</a></li>
                                    <li><a href="element-testimonial.html">Testimonials</a></li>
                                </ul>
                            </li> --}}

                            {{-- Right links --}}
                            <li class="float-right"><a href="#" class="pl-1" target="_blank">Find Need</a></li>
                            <li class="float-right"><a href="#" class="pl-1">Post Need</a></li>
                            <li class="float-right"><a href="#" class="pl-1" target="_blank">Post Jobs</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- Desktop right --}}
                <div class="header-right px-0">
                    <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                        <a href="#" class="search-toggle" role="button">
                            <ion-icon name="search-outline" style="font-size: 22px"></ion-icon>
                        </a>
                        
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control scroll-search" name="q" id="qqq" placeholder="Search..." required>
                                <div class="select-custom">
                                    <select id="cat" name="cat">
                                        <option>All Categories</option>
                                        <option>Fashion</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                                <button class="btn p-0 icon-search-3" type="submit"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->

                    <div class="header-contact d-none d-lg-flex pl-0 ml-3 mr-xl-4">
                        <div class="header-icon mb-0">
                            <a href="#">
                                <ion-icon name="duplicate-outline" style="font-size: 22px"></ion-icon>
                            </a>
                        </div>
                        
                        <div class="header-icon mb-0">
                            <a href="#">
                                <ion-icon name="notifications-outline" style="font-size: 22px"></ion-icon>
                            </a>
                        </div>
                    </div>

                    @if (Auth::guest())
                    <a href="{{ route('login') }}" class="header-icon" title="Login">
                        <ion-icon name="log-in-outline" style="font-size: 22px">></ion-icon>
                    </a>
                    @else
                    <div class="dropdown profile-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer">
                            <img height="40" width="40" class="rounded-circle" src="{{ asset('general/imgs/black-man-4699506_1920.jpg') }}" alt="">
                        </div>
                        
                        <div class="dropdown-menu shadow-md">
                            <div class="px-4 py-2">
                                <img height="25" width="25" class="rounded-circle" src="{{ asset('general/imgs/black-man-4699506_1920.jpg') }}" alt="">
                                <br><span style="font-size: 14px; font-weight:500; line-height: 1px">{{ Auth::user()->name }}</span><br>
                                <span>{{ Auth::user()->email }}</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#"><ion-icon name="chatbubbles-outline"></ion-icon> Help center</a>
                            <a class="dropdown-item" href="#"><ion-icon name="cloud-download-outline"></ion-icon> Get the App</a>
                            <a class="dropdown-item" href="#"><ion-icon name="share-social-outline"></ion-icon> Share</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><ion-icon name="power-outline"></ion-icon> Logout</a>
                        </div>
                        
                    </div>
                    @endif

                    <!-- End .dropdown -->
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-bottom -->
    </div>



    {{-- Mobile --}}
    @include('market.partials.mobile.navbar')
    {{-- End Mobile --}}
</header>
<!-- End .header -->

{{-- mobile tab --}}
@include('market.partials.mobile.tab')
{{-- end mobile tab --}}