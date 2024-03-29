<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title') - Mountaineer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mountaineer adalah sebuah platform online yang dirancang untuk memudahkan proses booking atau pemesanan tiket ketika seseorang ingin melakukan pendakian atau mendaki gunung." />
        <meta name="keywords" content="mountaineer, gunung, jawa barat, jawa timur, jawa tengah, sumatera, kalimantan, aceh, papua, indonesia, pendakian, pendaki" />
        <meta name="author" content="Mountainer Official" />
        <meta name="email" content="officialk@mountaineer.id" />
        <meta name="website" content="mountaineer.id" />
        <meta name="Version" content="v1.0.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico" />
        <!-- Css -->
        <link href="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('backend') }}/assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Datatables -->
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/data-tables/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/data-tables/css/responsive.bootstrap5.min.css">

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

        <div class="page-wrapper toggled">
            @include('backend.layouts.sidebar')

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                @include('backend.layouts.topbar')

                <div class="container-fluid">
                    <div class="layout-specing">
                        @yield('content')
                    </div>
                </div><!--end container-->

                @include('backend.layouts.footer')
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- Javascript -->
        <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/feather-icons/feather.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- Main Js -->
        <script src="{{ asset('backend') }}/assets/js/plugins.init.js"></script>
        <script src="{{ asset('backend') }}/assets/js/app.js"></script>
        <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
        <!-- Datatables -->
        <script src="{{ asset('backend') }}/assets/libs/data-tables/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/data-tables/js/dataTables.bootstrap5.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/data-tables/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/data-tables/js/responsive.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table').DataTable();
            })
        </script>

    </body>

</html>
