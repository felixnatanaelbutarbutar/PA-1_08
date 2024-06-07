@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Jemaat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active">Data Jemaat</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Data Jemaat</h1>

    <div class="container">
        <div class="row">
            @foreach ($lingkungans as $lingkungan)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $lingkungan->nama }}</h5>
                            <p class="card-text">Jumlah Kepala Keluarga: {{ $lingkungan->kepala_keluargas_count }}</p>
                            <a href="/lingkungans/{{ $lingkungan->id }}/kepala_keluargas" class="btn btn-primary mt-auto">Lihat Kepala Keluarga</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
<!-- </div> -->
@endsection

@push('css')
<style>
    .card {
        border-radius: 10px;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-title {
        font-family: 'Rowdies', cursive;
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        font-family: 'Arial', sans-serif;
        font-size: 1rem;
        margin-bottom: 1rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
@endpush
