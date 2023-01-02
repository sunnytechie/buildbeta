<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="Welcome to buildbeta platform />
    <meta property="og:title"
        content="{{ config('app.name') }}" />
    <meta property="og:description"
        content="Buildbeta is an O2O platform for everything relating to building, building material, real estate, home services and
    appliances, furniture, and office wares." />
    <meta property="og:image" content="{{ asset('general/imgs/BUILDBETA_LOGO_2_PNG.png') }}" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="{{ config('app.name') }}" />

    <meta name="description"
        content="Buildbeta is an O2O platform for everything relating to building, building material, real estate, home services and
    appliances, furniture, and office wares.
    It is an internet platform which gives both suppliers, service providers and buyers a fair ground for every business and 
    transaction relating to building, building materials, home appliances, furniture, real estate, artisanry, etc.
    Buildbeta O2O internet marketplace gives suppliers and service provides a platform to showcase their activities while also 
    giving buyers the opportunity to choose from comparatively different vendors and service providers. ">
    <meta name="author" content="Buildbeta">
    <meta name="keywords"
        content="Buildbeta, O2O platform, building, building material, real estate, home services and
        appliances, furniture, and office wares,suppliers, service providers, buyers building, building materials, home appliances, furniture, real estate, artisanry ">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('general/imgs/BUILDBETA_LOGO_2_PNG.png') }}">


    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:300,400,500,600,700', 'Open+Sans:300,400,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'market/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('market/assets/css/bootstrap.min.css') }}">

    {{-- buildbeta css --}}
    <link rel="stylesheet" href="{{ asset('market/assets/css/buildbeta.css') }}">
    {{-- Dropify css --}}
    <link rel="stylesheet" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('market/assets/css/demo10.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('market/assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('market/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('market/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header hide-from-mobile">
            <div class="header-wrapper">
                <div class="header-top sticky-header" data-sticky-options="{'mobile': true}">
                    <div class="container">
                        <div class="header-left header-dropdowns">
                            <div class="header-dropdown d-none d-lg-block">
                                <a href="#" class="pl-0">ENG</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">ENG</a></li>
                                        <li><a href="#">FRE</a></li>
                                    </ul>
                                </div>
                                <!-- End .header-menu -->
                            </div>
                            <!-- End .header-dropown -->

                            <div class="header-dropdown d-none d-lg-block">
                                <a href="#" class="pt-0">NGN</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">NGN</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </div>
                                <!-- End .header-menu -->
                            </div>
                            <!-- End .header-dropown -->

                            <button class="mobile-menu-toggler d-lg-none d-block" type="button">
								<i class="fas fa-bars text-white"></i>
							</button>

                            <a href="#" class="logo d-block d-lg-none">
                                BuildBeta
                            </a>
                        </div>
                        <!-- End .header-left -->

                        <div class="header-right">
                            <a href="#" class="header-icon header-icon-user d-lg-block d-none">
                                <i class="icon-user-2"></i>
                            </a>

                        
                            <a href="#" title="Wishlist" class="header-icon show-only-mobile">
                                <i class="icon-user-2"></i>
                            </a>
                        </div>
                        <!-- End .header-right -->
                    </div>
                    <!-- End .container -->
                </div>
                <!-- End .header-top -->

                <div class="header-middle d-lg-block d-none">
                    <div class="container d-block">
                        <div class="header-left d-none d-lg-flex justify-content-start">
                            <button class="mobile-menu-toggler" type="button">
								<i class="fas fa-bars"></i>
							</button>

                            <a href="#" class="logo mt-3 mb-2">
                                <img width="35" height="35" src="{{ asset('general/imgs/BUILDBETA_LOGO_PNG.png') }}" alt="">
                            </a>
                        </div>
                        <!-- End .header-left -->

                        <div class="header-right d-lg-block d-flex">

                            <nav class="main-nav">
                                <ul class="menu  menu-vertical sf-arrows no-animation">
                                    @if (Auth::user()->is_seller == 1)
                                    <li class="active border-0"><a href="{{ route('seller.dashboard') }}">Dashboard</a></li>
                                    <li class="active border-0"><a href="{{ route('seller.settings') }}">Settings</a></li>
                                    @else
                                    <li class="active border-0"><a href="{{ route('buyer.dashboard') }}">Dashboard</a></li>
                                    <li class="active border-0"><a href="{{ route('buyer.settings') }}">Settings</a></li>
                                    @endif
                                    
                                    @if (Auth::user()->is_seller == 1)
                                    <li class="active border-0"><a href="{{ route('product.dashboard') }}">Product</a></li>
                                    @endif
                                    
                                    <li class="active border-0"><a href="{{ route('profile.edit') }}">Account details</a></li>
                                    
                                    <li class="active border-0 ml-2 mt-1">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();" style="color: #fff; text-transform:capitalize">Log Out</a>
                                        </form>    
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- End .header-right -->
                    </div>
                    <!-- End .container -->
                </div>
                <!-- End .header-middle -->

                <div class="header-bottom d-none d-lg-block text-align-center position-absolute">
                    <div class="container d-block text-center">
                        <div class="header-left d-block">
                            <h6 class="mb-0">CALL US NOW</h6>
                        </div>
                        <!-- End .header-left -->

                        <div class="header-right d-block pr-0">
                            <div class="header-contact text-white">
                                <a href="tel:#">+123 456 7890</a>
                            </div>
                            <!-- End .header-contact -->
                        </div>
                        <!-- End .header-right -->
                    </div>
                    <!-- End .container -->

                    <div class="social-icons text-center">
                        <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                        <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
                    </div>
                    <!-- End .social-icons -->
                </div>
                <!-- End .header-bottom -->

            </div>
            <!-- End .header-wrapper -->
        </header>
        <!-- End .header -->

        <main class="main">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <!-- End .main -->

        <footer class="footer" style="margin-top: 12rem">
            {{-- <div class="container">
                <div class="feature-boxes-container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-box feature-rounded">
                                <i class="sicon-earphones-alt"></i>

                                <div class="feature-box-content">
                                    <h3>Customer Support</h3>
                                    <h5>Need Assistance?</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="feature-box feature-rounded">
                                <i class="sicon-credit-card"></i>

                                <div class="feature-box-content">
                                    <h3>Secured Payment</h3>
                                    <h5>Safe &amp; Fast</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="feature-box feature-rounded">
                                <i class="sicon-action-undo"></i>

                                <div class="feature-box-content">
                                    <h3>Returns</h3>
                                    <h5>Easy &amp; Free</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div> --}}
            <!-- End .section-6 -->

            {{-- <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="widget">
                                <h4 class="widget-title font-weight-bold">Contact Info</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Address:</span>1234 Street Name, City, England
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span><a href="tel:">(123)
											456-7890</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                                    </li>
                                </ul>
                                <div class="social-icons mb-6 mb-md-0">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin icon-instagram" target="_blank" title="Linkedin"></a>
                                </div>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-9 col-md-8">
                            <div class="widget widget-newsletter mb-0">
                                <h4 class="widget-title">Subscribe newsletter</h4>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <p class="mb-0">Get all the latest information on Events, Sales and Offers. Sign up for newsletter today.</p>
                                    </div>
                                    <!-- End .col-lg-6 -->

                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <form action="#" class="d-flex mb-0 w-100">
                                            <input type="email" class="form-control mb-0" placeholder="Email Address" required>

                                            <input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
                                        </form>
                                    </div>
                                    <!-- End .col-lg-6 -->
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .widget -->

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="widget">
                                        <h4 class="widget-title">Customer Service</h4>

                                        <div class="links link-parts row mb-0">
                                            <ul class="link-part col-lg-6 col-md-12">
                                                <li><a href="demo10-about.html">About us</a></li>
                                                <li><a href="demo10-contact.html">Contact us</a></li>
                                                <li><a href="login.html">My account</a></li>
                                            </ul>
                                            <ul class="link-part col-lg-6 col-md-12">
                                                <li><a href="#">Order history</a></li>
                                                <li><a href="#">Advanced search</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-sm-6 -->

                                <div class="col-sm-7">
                                    <div class="widget">
                                        <h4 class="widget-title">About Us</h4>

                                        <div class="links link-parts row mb-0">
                                            <ul class="link-part col-lg-6 col-md-12">
                                                <li><a href="#">Super Fast Html Template</a></li>
                                                <li><a href="#">1st Fully working Ajax Theme</a></li>
                                                <li><a href="#">36 Unique Shop Layouts</a></li>
                                            </ul>
                                            <ul class="link-part col-lg-6 col-md-12">
                                                <li><a href="#">Powerful Admin Panel</a></li>
                                                <li><a href="#">Mobile & Retina Optimized</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-sm-6 -->
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .col-lg-9 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div> --}}
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom pb-2 d-flex justify-content-between align-items-center flex-wrap">
                    <p class="footer-copyright py-3 pr-sm-4 pr-0 mb-0">BuildBeta. &copy; 2023. All Rights Reserved
                    </p>

                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-bottom -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    {{-- Loader --}}
    <div class="loading-overlay">
        <div class="bounce-loader" style="user-select: none;">
            <img height="180" width="180" src="{{ asset('general/imgs/BUILDBETA_LOGO_PNG.png') }}" alt="Loader">
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <!-- End .mobile-menu-container -->
    @include('market.partials.mobile.sidebar')

    {{-- Bottom Mobile menu --}}
    @include('market.partials.mobile.navigator')
    {{-- Mobile Menu --}}



    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{ asset('market/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('market/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('market/assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('market/assets/js/jquery.appear.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('market/assets/js/main.min.js') }}"></script>

    {{-- Dropify --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
</body>

</html>