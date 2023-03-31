@extends('backend.layouts.main')

@section('title', 'Log Aktivitas')

@section('content')
<div class="d-md-flex justify-content-between align-items-center">
    <h5 class="mb-0">Log Aktivitas</h5>

    <nav aria-label="breadcrumb" class="d-inline-block">
        <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
            <li class="breadcrumb-item text-capitalize"><a href="#">Log Aktivitas</a></li>
            <li class="breadcrumb-item text-capitalize active" aria-current="page">List</li>
        </ul>
    </nav>
</div>

<div class="row">
    <div class="col-12 mt-4">
        <div class="table-responsive shadow rounded">
            <div class="card-body">
                <table class="table table-center bg-white mb-0" id="table">
                    <thead>
                        <tr>
                            <th class="border-bottom p-3">No</th>
                            <th class="border-bottom p-3">Nama Pengguna</th>
                            <th class="border-bottom p-3">Nama Log</th>
                            <th class="border-bottom p-3">Keterangan</th>
                            <th class="border-bottom p-3">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Start -->
                        @foreach($activities as $activity)
                            <tr>
                                <td class="p-3">{{ $loop->iteration }}</td>
                                <td class="p-3">
                                    @if($activity->causer)
                                        {{ $activity->causer->name }}
                                    @else
                                        N/A (dari sistem)
                                    @endif
                                </td>
                                <td class="p-3">{{ $activity->log_name }}</td>
                                <td class="p-3">{{ $activity->description }}</td>
                                <td class="p-3">{{ $activity->created_at }}</td>
                            </tr>
                        @endforeach
                        <!-- End -->
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->
@endsection
