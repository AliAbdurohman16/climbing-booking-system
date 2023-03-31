<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Mountaineer - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mountaineer adalah sebuah platform online yang dirancang untuk memudahkan proses booking atau pemesanan tiket ketika seseorang ingin melakukan pendakian atau mendaki gunung." />
        <meta name="keywords" content="mountaineer, gunung, jawa barat, jawa timur, jawa tengah, sumatera, kalimantan, aceh, papua, indonesia, pendakian, pendaki" />
        <meta name="author" content="Mountainer Official" />
        <meta name="email" content="officialk@mountaineer.id" />
        <meta name="website" content="mountaineer.id" />
        <meta name="Version" content="v1.0.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/favicon.ico" />

        <!-- Css -->
        <link href="{{ asset('frontend') }}/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="{{ asset('frontend') }}/assets/libs/js-datepicker/datepicker.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('frontend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('frontend') }}/assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        @yield('content')
        @include('frontend.layouts.footer')


        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('frontend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/libs/feather-icons/feather.min.js"></script>
        <!-- SLIDER -->
        <script src="{{ asset('frontend') }}/assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <!-- Datepicker -->
        <script src="{{ asset('frontend') }}/assets/libs/js-datepicker/datepicker.min.js"></script>
        <!-- Main Js -->
        <script src="{{ asset('frontend') }}/assets/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('frontend') }}/assets/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>
