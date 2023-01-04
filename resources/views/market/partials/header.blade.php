<style>
    .header-search-wrapper input:focus {
        border: 0.1rem solid #FFFFFF !important;
    }
    .header-search-wrapper input:active {
        border: 0.1rem solid #FFFFFF !important;
    }

    ion-icon:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
}

.tooltip-inner{
    padding: 0.2rem 0.8rem;
    background: #ccc;
    color: #FFF;
    border: 0;
}

.desktop-scroll-search .form-control {
    border-top-left-radius: 0rem !important;
    border-bottom-left-radius: 0rem !important;
}

.header-search-category .btn {
    border-top-right-radius: 0rem !important;
    border-bottom-right-radius: 0rem !important;
}

/* media query on tablet view */
@media (max-width: 991px) {
    .header-search-inline .form-control {
        background: #ffffff !important;
        color: #000000 !important;
    }
}

</style>
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
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->

                    {{-- <span class="separator"></span>
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
                    <!-- End .header-dropown --> --}}

                    <span class="separator"></span>

                    <div class="social-icons">
                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                        {{-- <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a> --}}
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

                    <div class="header-icon mb-0 header-search first-header header-search-inline header-search-category w-lg-max pl-3 pr-1" style="text-align: right">
                        <a href="#" class="search-toggle" role="button" title="Search"><i
                                class="icon-search-3"></i></a>
                        <form action="{{ route('search') }}" method="get" style="width: 600px">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control first-input" name="query" id="query" placeholder="Search..." required style="background: transparent; border: 0.2rem solid #FFFFFF; color: #FFF; border-radius: 0;" value="{{  request('query') }}">
                                <div class="select-custom">
                                    <select id="category" name="category">
                                        <option value="">All Categories</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
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
                        @if (Auth::check())
                        @if (Auth::user()->is_seller == 1)
                            <div class="header-icon mb-0">
                                <a href="{{ route('product.dashboard') }}">
                                    <ion-icon name="add-circle" style="font-size: 25px" data-toggle="tooltip" data-placement="bottom" title="Post products"></ion-icon>
                                </a>
                            </div>
                        @endif
                        @endif

                        @if (Auth::check())
                        <div class="header-icon mb-0">
                            <a href="#">
                                <ion-icon name="notifications-circle" style="font-size: 25px" data-toggle="tooltip" data-placement="bottom" title="See Notifications"></ion-icon>
                            </a>
                        </div>
                        @endif

                    </div>
                    
                    @if (Auth::guest())
                    <a href="{{ route('login') }}" class="header-icon d-inline-block" title="Login">
                        <ion-icon name="person-circle" style="font-size: 25px" data-toggle="tooltip" data-placement="bottom" title="Login or Register"></ion-icon>
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
                            @if (Auth::user()->is_seller == 1)
                            <a class="dropdown-item" href="{{ route('seller.dashboard') }}">Dashboard</a>
                                @else
                            <a class="dropdown-item" href="{{ route('buyer.dashboard') }}">Dashboard</a>
                            @endif
                            <a class="dropdown-item" href="#"><ion-icon name="chatbubbles-outline"></ion-icon> Help center</a>
                            <a class="dropdown-item" href="#"><ion-icon name="cloud-download-outline"></ion-icon> Get the App</a>
                            <a class="dropdown-item" href="#"><ion-icon name="share-social-outline"></ion-icon> Share</a>
                            <form class="mb-0" method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"><ion-icon name="power-outline"></ion-icon> Logout</a>
                            </form>
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
                    <a href="/" class="logo">
                        {{-- <img src="{{ asset('general/imgs/BUILDBETA_LOGO_4_PNG.png') }}" alt="buildbeta Logo"> --}}
                        <img height="30px" width="30px" src="{{ asset('general/imgs/icons/logo.svg') }}" alt="">
                    </a>
                </div>
                <div class="header-center">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li><a href="{{ route('browse') }}">Products</a></li>
                            <li><a href="#">Designs</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Properties</a></li>

                           
                            {{-- Right links --}}
                            <li class="float-right"><a href="{{ route('find.design.requirement') }}" class="pl-1">Find Need</a></li>
                            <li class="float-right"><a href="{{ route('post.product.requirement') }}" class="pl-1">Post Need</a></li>
                            <li class="float-right"><a href="{{ route('job.create') }}" class="pl-1">Post Jobs</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- Desktop right --}}
                <div class="header-right px-0">
                    <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                        <a href="#" class="search-toggle" role="button">
                            <ion-icon name="search-circle" style="font-size: 25px"></ion-icon>
                        </a>
                        
                        <form class="desktop-scroll-search" action="{{ route('search') }}" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="scroll-search form-control rounded-0" name="query" id="query" placeholder="Search..."  value="{{  request('query') }}" required style="border-radius: 0">
                                <div class="select-custom">
                                    <select id="category" name="category">
                                        <option value="">All Categories</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                                <button class="btn p-0 icon-search-3" type="submit"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->

                    @if (Auth::check())
                    <div class="header-contact d-none d-lg-flex pl-0 ml-3 mr-xl-4">
                        
                            @if (Auth::user()->is_seller == 1)
                            <div class="header-icon mb-0">
                                <a href="{{ route('product.dashboard') }}">
                                    <ion-icon name="add-circle" style="font-size: 25px" data-toggle="tooltip" data-placement="bottom" title="Post products"></ion-icon>
                                </a>
                            </div>
                            @endif
                       
                        
                        @if(Auth::check())
                          <div class="header-icon mb-0">
                                <a href="#">
                                    <ion-icon name="notifications-circle" style="font-size: 25px" data-toggle="tooltip" data-placement="bottom" title="See Notifications"></ion-icon>
                                </a>
                            </div> 
                        @endif
                    </div>
                    @endif

                    @if (Auth::guest())
                    <a href="{{ route('login') }}" class="header-icon" title="Login">
                        <ion-icon name="person-circle" style="font-size: 25px" data-toggle="tooltip" data-placement="bottom" title="Login or Register"></ion-icon>
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
                            @if (Auth::user()->is_seller == 1)
                            <a class="dropdown-item" href="{{ route('seller.dashboard') }}">Dashboard</a>
                                @else
                            <a class="dropdown-item" href="{{ route('buyer.dashboard') }}">Dashboard</a>
                            @endif
                            <a class="dropdown-item" href="#"><ion-icon name="chatbubbles-outline"></ion-icon> Help center</a>
                            <a class="dropdown-item" href="#"><ion-icon name="cloud-download-outline"></ion-icon> Get the App</a>
                            <a class="dropdown-item" href="#"><ion-icon name="share-social-outline"></ion-icon> Share</a>
                            <form class="mb-0" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();"><ion-icon name="power-outline"></ion-icon> Logout</a>
                            </form>                        
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