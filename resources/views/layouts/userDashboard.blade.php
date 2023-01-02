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
                families: ['Poppins:300,400,500,600,700', 'Open+Sans:300,400,600,700,800', 'Shadows+Into+Light:400',
                    'Segoe+Script:300,400,500,600'
                ]
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

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('market/assets/css/demo2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('market/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('market/assets/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('market/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <!-- TITLE -->
    <title>Buildbeta Platfofrm </title>
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body>
    <div class="page-wrapper">

        <!-- Header -->
        @include('market.partials.header')

        <main class="main home">
            <div class="container mt-2">
                @yield('content')
            </div>
        </main>

        @include('market.partials.footer')
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

    {{-- Search modal --}}

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{ asset('market/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('market/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('market/assets/js/optional/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('market/assets/js/optional/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('market/assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('market/assets/js/jquery.appear.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('market/assets/js/main.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/63939dffdaff0e1306dbcf9c/1gjsa2cke';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

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
