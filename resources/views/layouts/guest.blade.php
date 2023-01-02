<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="Welcome to buildbeta platform />
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

    {{-- buildbetacss --}}
    <link rel="stylesheet" href="{{ asset('market/assets/css/buildbeta.css') }}">
    
        <!-- Scripts -->
     {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}


    <style>
        .select-sign-up-bg {
            background: #fff;
            border: 0.1rem solid #0080E6 !important;
            border-radius: 0 !important;
        }

        .select-sign-up-bg-active {
            background: #0080E6;
            border: 0.1rem solid #0080E6 !important;
            border-radius: 0 !important;
            color: #fff !important;
        }

        input {
            padding: 10px !important;
        }

        .select-sign-up-bg:hover {
            background: #0080E6;
            cursor: pointer;
        }

        .select-sign-up-bg:active {
            background: #0080E6 !important;
        }

        .select-sign-up-bg:hover .card-title {
            color: #fff !important;
        }

        .select-sign-up-bg:hover .card-text {
            color: #fff !important;
        }

        .iti input[type=text], .iti input[type=tel] {
            height: 41px;
            border: 1px solid #6b7280;
            border-radius: 0 !important;
            font-size: 14px;
        }

        select {
            height: 41px;
            border: 1px solid #6b7280 !important;
            border-radius: 0 !important;
            font-size: 14px;
        }

        
    </style>
    </head>
    <body>
        <!-- GLOBAL-LOADER -->
        <div id="global-loader" style="user-select: none;">
            <img height="80" width="70" src="{{ asset('general/imgs/BUILDBETA_LOGO_PNG.png') }}" class="loader-img" alt="Loader">
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

    <!-- INTERNAL intlTelInput js-->
    {{-- <script src="{{ asset('main/assets/plugins/intl-tel-input-master/intlTelInput.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/intl-tel-input-master/country-select.js') }}"></script>
    <script src="{{ asset('main/assets/plugins/intl-tel-input-master/utils.js') }}"></script> --}}

    <!-- Color Theme js -->
    <script src="{{ asset('main/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('main/assets/js/custom.js') }}"></script>

    <!-- Custom-switcher -->
    <script src="{{ asset('main/assets/js/custom-swicher.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('main/assets/switcher/js/switcher.js') }}"></script>

    <script>
        $('form').submit(function (event) {
        if ($(this).hasClass('submitted')) {
            event.preventDefault();
            document.getElementById("submit").disabled = true;
        }
        else {
            $(this).find(':submit').html('<i class="fa fa-spinner fa-spin"></i>');
            $(this).addClass('submitted');
        }
    });
    </script>

    <script>
        $(document).ready(function changeBgFunction() {
            $('.select-sign-up-bg').click(function () {
                $('.select-sign-up-bg').removeClass('select-sign-up-bg-active');
                $(this).addClass('select-sign-up-bg-active');
            });
        });
    </script>
    </body>
</html>
