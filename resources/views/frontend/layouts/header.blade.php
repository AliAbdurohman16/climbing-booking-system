<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <span class="logo-light-mode">
                <!-- <img src="{{ asset('frontend') }}/assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                <img src="{{ asset('frontend') }}/assets/images/logo-light.png" class="l-light" height="24" alt=""> -->
                <span class="l-dark">Mountaineer</span>
                <span class="l-light text-light">Mountaineer</span>
            </span>
            <span class="logo-dark-mode" >Mountaineer</span>
            <!-- <img src="{{ asset('frontend') }}/assets/images/logo-light.png" height="24" class="logo-dark-mode" alt=""> -->
        </a>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            @guest
                @if (Route::has('register'))
                    <li class="list-inline-item mb-0">
                        <a href="{{ route('register') }}">
                            <div class="login-btn-primary"><span class="btn btn-primary">Daftar</span></div>
                            <div class="login-btn-light"><span class="btn btn-light">Daftar</span></div>
                        </a>
                    </li>
                    @endif

                    @if (Route::has('login'))
                    <li class="list-inline-item ps-1 mb-0">
                        <a href="{{ route('login') }}">
                            <div class="login-btn-primary"><span class="btn btn-outline-primary">Masuk</span></div>
                            <div class="login-btn-light"><span class="btn btn-outline-light">Masuk</span></div>
                        </a>
                    </li>
                @endif
            @endguest
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="" class="sub-menu-item">Beranda</a></li>
                <li><a href="#tentang" class="sub-menu-item">Tentang</a></li>
                <li><a href="#benefit" class="sub-menu-item">Benefit</a></li>
                <li><a href="#destinasi" class="sub-menu-item">Destinasi</a></li>
                <li><a href="#faq" class="sub-menu-item">FAQ</a></li>
                <li><a href="#testimonial" class="sub-menu-item">Testimonial</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
