<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caffee | Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/loog.png') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    {{-- style for scrollbar --}}
    <link rel="stylesheet" href="{{ asset('css/partial-style/scrollbar.css') }}">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- font style --}}
    <link rel="stylesheet" href="{{ asset('style_dashboard/font-style/font.css') }}">
    {{-- link for Gallery --}}
    <link rel="stylesheet" href="{{ asset('css/gallery/style.css') }}">
    {{-- trix link --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        *,
        body {
            font-family: 'hack';
        }

        /* style dashboard  */
        .cardImg {
            background-position: center;
            background-size: cover;
        }

        /* end */

        .side-text {
            font-family: 'hack';
        }

        .bg-black {
            background-color: rgba(0, 0, 0, .25);
        }

        .search::-webkit-input-placeholder {
            color: rgb(124, 124, 124);
        }

        /* style untuk bagian dashboard kelola gallery */
        .card-gambar {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 30rem;
            border: none
        }

        .card-gambar .menuBar {
            margin-top: auto;

        }

        /* end style dashboard gallery/ */

        /* style untuk halaman dashboard menu */
        .menuImg {
            background-size: cover;
            background-position: center;
        }


        /* end// */

        /* style dashboard user  */
        table th,
        td {
            padding: 1rem
        }

        table td {
            color: rgb(213, 205, 205)
        }

        /* end dashboar user */

        /* style dashboard news */
        @media screen and (max-width:1170px) {
            .newsImg {
                display: none;
            }
        }

        .newsShowImg {
            background-size: cover;
            background-position: center;
        }

        /* end /// */
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed bg-dark">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- loading ketika di refresh -->
        <div class="preloader flex-column justify-content-center align-items-center bg-dark">
            <img class="animation__shake" src="{{ asset('assets/img/loog.png') }}" alt="Logo" height="40"
                width="60">
        </div>

        {{-- navbar --}}
        @include('dashboard.partials.nav')
        {{-- end navbar --}}

        @if (request()->is('dashboard/*/*'))
        @else
            {{-- sidebar --}}
            @include('dashboard.partials.sidebar')
            {{-- end sidebar --}}
        @endif


        <div class="content-wrapper bg-konten bg-dark">
            <!-- Content Wrapper. Contains page content -->
            @yield('container')
            <!-- /.content-wrapper -->
        </div>

        {{-- footer --}}
        @include('dashboard.partials.footer')
        {{-- end footer --}}

    </div>
    <!-- ./wrapper -->

    {{-- swat allert --}}
    @include('sweetalert::alert')

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    @yield('script')


    <!-- jQuery -->
    <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
    {{-- icon font awesome --}}
    <script src="https://kit.fontawesome.com/42c9acb339.js" crossorigin="anonymous"></script>

    <!-- overlayScrollbars -->
    <script src="{{ asset('assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets') }}/dist/js/adminlte.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
