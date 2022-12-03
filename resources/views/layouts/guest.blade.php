<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <!-- GLOBAL-LOADER -->
        <div id="global-loader" style="user-select: none;">
            <img height="80" width="80" src="{{ asset('general/imgs/BUILDBETA_LOGO_PNG.png') }}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->


        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        
    <!-- JQUERY JS -->
    <script src="{{ asset('main/assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('main/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('main/assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('main/assets/js/sticky.js') }}"></script>


    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('main/assets/plugins/select2/select2.full.min.js') }}"></script>


    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('main/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/flot/dashboard.sampledata.js') }}"></script>


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
    <script src="{{ asset('main/assets/switcher/js/switcher.js') }}"></script>

    </body>
</html>
