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
                                        <div class="form-icon position-relative">
                                            <i data-feather="calendar" class="fea icon-sm icons"></i>
                                            <input name="date" type="text" class="form-control ps-5" placeholder="Check in">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">No Whatsapp</label>
                                        <div class="form-icon position-relative">
                                            <span>+62</span>
                                            <input type="number" class="form-control ps-5" placeholder="Contoh : 81234567890" name="whatsapp" required="">
                                            <small>catatan: no whatsapp tidak di awali dengan angka 0</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah Pendaki</label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="users" class="fea icon-sm icons"></i>
                                            <input type="number" class="form-control ps-5" placeholder="Jumlah Pendaki" name="jml_pendaki" required="">
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
