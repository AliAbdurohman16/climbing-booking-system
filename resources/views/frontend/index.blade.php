@extends('frontend.layouts.main')

@section('content')

    @include('frontend.layouts.header')  

        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend') }}/assets/images/background/bg-mountain.jpg');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="title-heading mt-4">
                            <h1 class="display-4 fw-bold text-white title-dark mb-3">Pemesanan pendakian gunung dibuat mudah</h1>
                            <p class="para-desc text-white-50">Booking pendakian gunung? Mudah dengan kami! Pesan sekarang dan nikmati petualanganmu!.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="card shadow rounded border-0 ms-lg-5">
                            <div class="card-body">
                                <h5 class="card-title">Mulai booking pendakianmu di sini!</h5>

                                <form class="login-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Gunung</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                                    <input type="text" class="form-control ps-5" placeholder="Gunung" name="s" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label"> Check in : </label>
                                                <input name="date" type="text" class="form-control start" placeholder="Check in :">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Jumlah Pendaki</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input type="number" class="form-control ps-5" placeholder="Jumlah Pendaki" name="email" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-grid">
                                                <button class="btn btn-primary">Booking Sekarang</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-color-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->

        <section class="section bg-light" id="tentang">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title fw-bold mb-4">Tentang Kami</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Kenali lebih dekat website <span class="text-primary fw-bold">Mountaineer</span> yang akan memudahkan anda dalam pemesanan tiket pendakian.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mb-3">
                        <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                            <div class="position-relative">
                                <img src="{{ asset('frontend') }}/assets/images/content/about.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ms-lg-4">
                            <h4 class="title mb-4">Mountaineer</h4>
                            <p class="text-muted"><span class="text-primary fw-bold">Mountaineer</span> adalah sebuah platform online yang dirancang untuk memudahkan proses booking atau pemesanan tiket ketika seseorang ingin melakukan pendakian atau mendaki gunung.</p>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Layanan terpercaya.</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Pembayaran lebih cepat dan aman.</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Pemesanan tiket pendakian menjadi lebih mudah dan efisien.</li>
                            </ul>
                            <a href="javascript:void(0)" class="mt-3 h6 text-primary">Search Destination <i class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        
        <section class="section" id="benefit">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Benefit di Mountaineer</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Pesan pendakian gunung dengan mudah dan cepat. Temukan petualanganmu dan nikmati keindahan alam. Gunakanlah website kami sekarang!</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                            <span class="h1 icon-color">
                                <i class="uil uil-shield-check"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Pembayaran Yang Aman</h5>
                                <p class="para text-muted mb-0">Pembayaran aman saat booking pendakian di website kami!</p>
                            </div>
                            <span class="big-icon text-center">
                                <i class="uil uil-shield-check"></i>
                            </span>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                            <span class="h1 icon-color">
                                <i class="uil uil-thumbs-up"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Penggunaan Sangat Mudah</h5>
                                <p class="para text-muted mb-0">Booking pendakian mudah dan simpel di website kami!</p>
                            </div>
                            <span class="big-icon text-center">
                                <i class="uil uil-thumbs-up"></i>
                            </span>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                            <span class="h1 icon-color">
                                <i class="uil uil-award"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Penawaran Terbaik</h5>
                                <p class="para text-muted mb-0">Dapatkan penawaran terbaik untuk booking pendakianmu di website kami!</p>
                            </div>
                            <span class="big-icon text-center">
                                <i class="uil uil-award"></i>
                            </span>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                            <span class="h1 icon-color">
                                <i class="uil uil-favorite"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Nilai Tertinggi</h5>
                                <p class="para text-muted mb-0">Booking pendakian dengan nilai tertinggi hanya di website kami!</p>
                            </div>
                            <span class="big-icon text-center">
                                <i class="uil uil-favorite"></i>
                            </span>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                            <span class="h1 icon-color">
                                <i class="uil uil-clock"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Dukungan 24/7</h5>
                                <p class="para text-muted mb-0">Dukungan 24/7 tersedia di website booking pendakian kami!</p>
                            </div>
                            <span class="big-icon text-center">
                                <i class="uil uil-clock"></i>
                            </span>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                            <span class="h1 icon-color">
                                <i class="uil uil-process"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Efisien dan Cepat</h5>
                                <p class="para text-muted mb-0">Booking pendakianmu mudah, cepat, dan efisien di sini!</p>
                            </div>
                            <span class="big-icon text-center">
                                <i class="uil uil-process"></i>
                            </span>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <section class="section" id="destinasi">
            <div class="container">
                <div class="row align-items-end mb-4 pb-2">
                    <div class="col-md-8">
                        <div class="section-title text-center text-md-start">
                            <h4 class="title mb-4">Destinasi Gunung</h4>
                            <p class="text-muted mb-0 para-desc">Rasakan Ketenangan dan Keindahan Alam yang Menyejukkan <br> di Destinasi Gunung Pilihan Kami.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-4 pt-2">
                        <div class="tiny-six-item">
                            <div class="tiny-slide">
                                <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                    <img src="{{ asset('frontend') }}/assets/images/content/merapi.jpg" class="img-popular-tour" alt="">
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white h4 title-dark">Merapi</a>
                                    </div>
                                </div><!--end tour post-->
                            </div>
                            
                            <div class="tiny-slide">
                                <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                    <img src="{{ asset('frontend') }}/assets/images/content/bromo.jpg" class="img-popular-tour" alt="">
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white h4 title-dark">Bromo</a>
                                    </div>
                                </div><!--end tour post-->
                            </div>
                            
                            <div class="tiny-slide">
                                <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                    <img src="{{ asset('frontend') }}/assets/images/content/batur.jpg" class="img-popular-tour" alt="">
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white h4 title-dark">Batur</a>
                                    </div>
                                </div><!--end tour post-->
                            </div>
                            
                            <div class="tiny-slide">
                                <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                    <img src="{{ asset('frontend') }}/assets/images/content/dieng.jpg" class="img-popular-tour" alt="">
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white h4 title-dark">Dieng</a>
                                    </div>
                                </div><!--end tour post-->
                            </div>
                            
                            <div class="tiny-slide">
                                <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                    <img src="{{ asset('frontend') }}/assets/images/content/semeru.png" class="img-popular-tour" alt="">
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white h4 title-dark">Semeru</a>
                                    </div>
                                </div><!--end tour post-->
                            </div>
                            
                            <div class="tiny-slide">
                                <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                    <img src="{{ asset('frontend') }}/assets/images/content/rinjani.jpeg" class="img-popular-tour" alt="">
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white h4 title-dark">Rinjani</a>
                                    </div>
                                </div><!--end tour post-->
                            </div>
                            
                            <div class="tiny-slide">
                                <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                    <img src="{{ asset('frontend') }}/assets/images/content/sumbing.jpeg" class="img-popular-tour" alt="">
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white h4 title-dark">Sumbing</a>
                                    </div>
                                </div><!--end tour post-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </section><!--end section-->

        <section class="section bg-light" id="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">FAQ</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Kami Memahami Kebutuhan Informasi Anda, Cek FAQ Kami untuk Menjawab Segala Pertanyaan Anda.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row align-items-center mt-4">
                    <div class="col-lg-5 col-md-6 order-1 order-md-2 mb-4">
                        <img src="{{ asset('frontend') }}/assets/images/content/faq.jpeg" class="img-fluid rounded shadow-md" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item rounded shadow">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Apa itu Mountaineer?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        Sebuah platform online yang dirancang untuk memudahkan proses booking atau pemesanan tiket ketika seseorang ingin melakukan pendakian atau mendaki gunung.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="true" aria-controls="collapseTwo">
                                        Tujuan Mountaineer?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        Tujuan Mountaineer adalah memudahkan proses pemesanan tiket pendakian gunung bagi pengguna, serta membantu dalam memilih destinasi pendakian yang sesuai.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Bagaimana cara kerjanya?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        Registrasi atau Login terlebih dahulu lalu setelah itu pengguna bisa melakukan pemesanan tiket pendakian.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Apa yang harus saya lakukan untuk mulai pemesanan?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        Pengguna akan melakukan Registrasi atau Login terlebih dahulu sebelum mulai pemesanan.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Apa yang terjadi ketika saya sudah melakukan pemesanan?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse border-0 collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        Ketika pengguna telah melakukan pemesanan maka akan muncul sebuah notifikasi kepada email yang telah terdaftar. Lalu setelah itu pengguna menyerahkan
                                        bukti berupa invoice kepada petugas untuk divalidasi sebelum melakukan pendakian.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <section class="section bg-light" id="testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Testimonial</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Testimonial di <span class="text-primary fw-bold">Mountaineer</span> adalah ulasan pelanggan kami tentang pengalaman mereka menggunakan layanan platform kami.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-12 mt-4">
                        <div class="tiny-three-item">
                            <div class="tiny-slide">
                                <div class="d-flex client-testi m-2">
                                    <img src="{{ asset('frontend') }}/assets/images/client/01.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                                    <div class="card flex-1 content p-3 shadow rounded position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                        <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tiny-slide">
                                <div class="d-flex client-testi m-2">
                                    <img src="{{ asset('frontend') }}/assets/images/client/02.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                                    <div class="card flex-1 content p-3 shadow rounded position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                        <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="d-flex client-testi m-2">
                                    <img src="{{ asset('frontend') }}/assets/images/client/03.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                                    <div class="card flex-1 content p-3 shadow rounded position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                        <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="d-flex client-testi m-2">
                                    <img src="{{ asset('frontend') }}/assets/images/client/04.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                                    <div class="card flex-1 content p-3 shadow rounded position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                        <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="d-flex client-testi m-2">
                                    <img src="{{ asset('frontend') }}/assets/images/client/05.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                                    <div class="card flex-1 content p-3 shadow rounded position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                        <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="d-flex client-testi m-2">
                                    <img src="{{ asset('frontend') }}/assets/images/client/06.jpg" class="avatar avatar-small client-image rounded shadow" alt="">
                                    <div class="card flex-1 content p-3 shadow rounded position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                        <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
@endsection
        