<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/loog.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="Albretus I.G">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Coffee | Allber</title>


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{ asset('style_landingPages/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('style_landingPages/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style_landingPages/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('style_landingPages/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('style_landingPages/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('style_landingPages/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style_landingPages/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('style_landingPages/css/main.css') }}">


    <style>
        /* styling untuk bagian tombol reservasi */

        .cta-res {
            background: transparent !important;
            border: rgb(166, 129, 65) solid 2px;
            border-radius: 0.3rem;
        }

        .parent {
            height: 20rem;
        }

        html {
            scroll-behavior: smooth
        }
    </style>
</head>

<body>

    @if (Request::is('home'))
        @include('landingPages.partials.header')
    @endif
    @yield('container')
    @include('landingPages.partials.footer')

    {{-- swat allert --}}
    @include('sweetalert::alert')


    <script src="{{ asset('style_landingPages/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('style_landingPages/js/vendor/bootstrap.min.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('style_landingPages/js/easing.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/superfish.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/parallax.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/mail-script.js') }}"></script>
    <script src="{{ asset('style_landingPages/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
