<div class="show-only-mobile" style="background-color: #0080E6; position: relative; width:100%; top: 0; z-index: 999;">
    <div class="header-middle py-4">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler" type="button">
                    <img src="{{ asset('general/imgs/icons/menu.svg') }}" alt="">
                </button>
                <a href="#" class="logo">
                    Buildbeta
                </a>
            </div>
            <!-- End .header-left -->

            <div class="header-right px-4" style="float: right">
                <a href="#" class="header-icon" title="Notifications">
                    <img src="{{ asset('general/imgs/icons/bell.svg') }}" alt="Notifications">
                </a>
                {{-- <div class="header-search header-search-inline header-search-category w-lg-max">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="qqq" placeholder="Search..." required>
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
                </div> --}}
                <!-- End .header-search -->

                {{-- @if (Auth::guest())
                <a href="{{ route('login') }}" class="header-icon" title="Login">
                    <i class="icon-user-2"></i>
                </a>
                @else
                <a href="#" class="header-icon" title="Login">
                    <i class="icon-user-2"></i>
                </a>
                @endif --}}

                <!-- End .dropdown -->
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-middle -->

    {{-- Mobile search section --}}
    <div class="header-middle p-0 pb-4">
        <div class="container">
            <div class="header-left search-filter" style="width: 80%">
                <form class="search mb-0" style="width: 100%">
                        <input type="text"placeholder="Search..." required style="padding: 10px; background: transparent; font-size: 14px; color: #fff; border: 0.2rem solid #fff; width: 100%;">
                </form>
            </div>

            <div class="header-right px-0" style="float: right" style="width: 20%">
                <a href="#" class="header-icon" title="Notifications">
                    <img src="{{ asset('general/imgs/icons/filter.svg') }}" alt="Notifications">
                </a>
            </div>
        </div>
    </div>

    {{-- Post and find needs section --}}
    <div class="header-middle p-0 pb-4">
        <div class="container">
            <div class="header-left" style="width: 48%">
                <a href="#" class="btn p-3 w-100" style="background: #fff; color: #0080E6; font-size: 14px; font-weight: 500; font-style: normal; text-transform: capitalize;">Post Needs</a>
            </div>

            <div class="header-right px-0" style="width: 48%">
                <a href="#" class="btn p-3 w-100" style="background: #fff; color: #0080E6; font-size: 14px; font-weight: 500; font-style: normal; text-transform: capitalize;">Find Needs</a>
            </div>
        </div>
    </div>
</div>