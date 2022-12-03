<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="Welcome to buildbeta Dashboard admin />
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:description" content="Buildbeta is an O2O platform for everything relating to building, building material, real estate, home services and
    appliances, furniture, and office wares." />
    <meta property="og:image" content="{{ asset('general/imgs/BUILDBETA_LOGO_2_PNG.png') }}" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="{{ config('app.name') }}" />

    <meta name="description" content="Buildbeta is an O2O platform for everything relating to building, building material, real estate, home services and
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

    <!-- TITLE -->
    <title>Buildbeta Platfofrm </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('main/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
     <link href="{{ asset('main/assets/css/style.css') }}" rel="stylesheet">

	<!-- Plugins CSS -->
    <link href="{{ asset('main/assets/css/plugins.css') }}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('main/assets/css/icons.css') }}" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('main/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/switcher/demo.css') }}" rel="stylesheet">
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    
    <body class="app sidebar-mini ltr light-mode">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader" style="user-select: none;">
            <img height="80" width="80" src="{{ asset('general/imgs/BUILDBETA_LOGO_PNG.png') }}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <div class="page">
            <div class="page-main">

                @include('dashboard.partials.header')
                @include('dashboard.partials.sidebar')

        
                <div class="main-content app-content mt-0">
                    <div class="side-app">
    
                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">
                            @yield('content')
                        </div>
                        <!-- CONTAINER END -->

                    </div>
                </div>

            </div>
        </div>
    

    @include('dashboard.partials.footer')
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('main/assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('main/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('main/assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('main/assets/js/sticky.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('main/assets/js/circle-progress.min.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('main/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('main/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('main/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('main/assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('main/assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <!-- DATA TABLE JS-->
    <script src="{{ asset('main/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/table-data.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('main/assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('main/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('main/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('main/assets/plugins/sidemenu/sidemenu.js') }}"></script>

	<!-- TypeHead js -->
	<script src="{{ asset('main/assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
    <script src="{{ asset('main/assets/js/typehead.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('main/assets/js/index1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('main/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('main/assets/js/custom.js') }}"></script>

    <!-- Custom-switcher -->
    <script src="{{ asset('main/assets/js/custom-swicher.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('main/assets/switcher/js/switcher.js"') }}></script>

    </body>
</html>
