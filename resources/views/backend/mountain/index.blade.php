@extends('backend.layouts.main')

@section('title', 'Data Gunung')

@section('content')
<div class="d-md-flex justify-content-between align-items-center">
    <h5 class="mb-0">Data Gunung</h5>

    <nav aria-label="breadcrumb" class="d-inline-block">
        <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
            <li class="breadcrumb-item text-capitalize"><a href="#">Data Gunung</a></li>
            <li class="breadcrumb-item text-capitalize active" aria-current="page">list</li>
        </ul>
    </nav>
</div>

<div class="row">
    <div class="col-12 mt-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary mb-3 btn-sm addButton">
                Tambah Data +
            </button>
        </div>
        <div class="table-responsive shadow rounded">
            <div class="card-body">
                <table class="table table-center bg-white mb-0" id="table">
                    <thead>
                        <tr>
                            <th class="text-center border-bottom p-3">No</th>
                            <th class="border-bottom p-3">Nama Gunung</th>
                            <th class="border-bottom p-3">Foto</th>
                            <th class="border-bottom p-3">Alamat</th>
                            <th class="border-bottom p-3">Harga Pendakian</th>
                            <th class="border-bottom p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Start -->
                        @foreach($mountains as $mountain)
                            <tr>
                                <th class="text-center p-3" style="width: 8%;">{{ $loop->iteration }}</th>
                                <td class="p-3">{{ $mountain->name }}</td>
                                <td class="p-3"><img src="{{ asset('storage/' . $mountain->thumbnail) }}" width="100px" class="img-fluid" alt="nama-gunung"></td>
                                <td class="p-3">{{ $mountain->address }}</td>
                                <td class="p-3">Rp. {{ number_format($mountain->price, 0, ',', '.')}} /orang</td>
                                <td style="width: 25%;">
                                    <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen"></i> Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                        <!-- End -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection
