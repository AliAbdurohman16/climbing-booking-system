@extends('auth.layouts.main')

@section('title', 'Daftar')

@section('content')
<!-- Hero Start -->
<section class="bg-primary d-flex align-items-center">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <a href="{{ url('/') }}"><img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                        <h5 class="mb-3 text-center">Daftarkan akun anda</h5>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="floatingInput" placeholder="Nama Lengkap" value="{{ old('name') }}" autocomplete="name">
                            <label for="floatingInput">Nama Lengkap</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" id="floatingInput" placeholder="nama@gmail.com" value="{{ old('email') }}" autocomplete="email">
                            <label for="floatingInput">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Kata Sandi" autocomplete="new-password">
                            <label for="floatingPassword">Kata Sandi</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password_confirmation" id="floatingPassword" placeholder="Konfirmasi Kata Sandi" autocomplete="new-password">
                            <label for="floatingPassword">Konfirmasi Kata Sandi</label>
                        </div>

                        <button class="btn btn-primary w-100" type="submit">Daftar</button>

                        <div class="col-lg-12 mt-4 text-center">
                            <h6>Atau Daftar Dengan</h6>
                            <div class="row">
                                <div class="col-6 mt-3">
                                    <div class="d-grid">
                                        <a href="{{ url('auth/facebook') }}" class="btn btn-light"><i class="mdi mdi-facebook text-primary"></i> Facebook</a>
                                    </div>
                                </div><!--end col-->

                                <div class="col-6 mt-3">
                                    <div class="d-grid">
                                        <a href="{{ url('auth/google') }}" class="btn btn-light"><i class="mdi mdi-google text-danger"></i> Google</a>
                                    </div>
                                </div><!--end col-->
                            </div>
                        </div><!--end col-->

                        <div class="col-12 text-center mt-3">
                            <p class="mb-0 mt-3"><small class="text-dark me-2">Sudah memiliki akun ?</small> <a href="{{ route('login') }}" class="text-dark fw-bold">Masuk</a></p>
                        </div><!--end col-->

                        <p class="mb-0 text-muted mt-3 text-center">© <script>document.write(new Date().getFullYear())</script> Mountaineer.</p>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->
@endsection
