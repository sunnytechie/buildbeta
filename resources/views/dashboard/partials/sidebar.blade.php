<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('dashboard') }}">
                <img src="{{ asset('general/imgs/BUILDBETA_LOGO_4_PNG.png') }}" class="header-brand-img desktop-logo" alt="logo">
                <img height="40" width="40" src="{{ asset('general/imgs/favicon.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img height="40" width="40" src="{{ asset('general/imgs/favicon.png') }}" class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset('general/imgs/BUILDBETA_LOGO_4_PNG.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">

                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link 
                    @if(request()->routeIs('dashboard'))
                        active
                    @endif"
                    data-bs-toggle="slide" href="{{ route('dashboard') }}"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>


                {{-- <li class="sub-category">
                    <h3>UI Kit</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span
                            class="side-menu__label">Apps</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side1" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
                                        <li><a href="#side2" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
                                    </ul>
                                </div>
                            </div>

                             <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                            <li><a href="widgets.html" class="slide-item"> Widgets</a></li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                            <li><a href="widgets.html" class="slide-item"> Widgets</a></li>
                                        </ul>
                                    </div>

                                    
                                </div>
                            </div> 

                        </li>
                    </ul>
                </li> --}}

                <li class="sub-category">
                    <h3>Posts</h3>
                </li>
                <li class="slide">
                    
                    <a class="side-menu__item has-link
                    @if(request()->routeIs('categories.index'))
                        active
                    @endif"
                     data-bs-toggle="slide" href="{{ route('categories.index') }}"><i
                            class="side-menu__icon fe fe-layers"></i><span
                            class="side-menu__label">Category</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('subcategories.index') }}"><i
                            class="side-menu__icon fe fe-list"></i><span
                            class="side-menu__label">Sub Category</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-database"></i><span
                            class="side-menu__label">Products</span></a>
                </li>


                <li class="sub-category">
                    <h3>User</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-user-check"></i><span
                            class="side-menu__label">Provider Category</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-shopping-cart"></i><span
                            class="side-menu__label">Buyer</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-truck"></i><span
                            class="side-menu__label">Service Provider/Seller</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-star"></i><span
                            class="side-menu__label">Bbforce Member</span></a>
                </li>



                <li class="sub-category">
                    <h3>Escrow</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-credit-card"></i><span
                            class="side-menu__label">Transactions</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-more-horizontal"></i><span
                            class="side-menu__label">Progressing</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-check"></i><span
                            class="side-menu__label">Completed</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-activity"></i><span
                            class="side-menu__label">Analytics</span></a>
                </li>



                <li class="sub-category">
                    <h3>Others</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-trending-up"></i><span
                            class="side-menu__label">challenges</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-briefcase"></i><span
                            class="side-menu__label">Jobs</span></a>
                </li>




                
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
<!--/APP-SIDEBAR-->