@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<style>
    .card {
        transition: transform 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-10px);
    }
    .breadcrumbs {
        text-align: center;
        color: #fff;
        font-size: 1.5rem;
        background-size: cover;
        background-position: center;
    }
    .card-title {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
    }
    .card-text {
        font-family: 'Arial', sans-serif;
        font-size: 1rem;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.2s ease-in-out;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
@endpush

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/hero-carousel/gereja.jpg') }}')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Data Jemaat Per Lingkungan</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Data jemaat</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <br><br>
    <div class="container">
        <div class="row">
            @foreach ($lingkungans as $lingkungan)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $lingkungan->nama }}</h5>
                            <p class="card-text">Jumlah Kepala Keluarga: {{ $lingkungan->kepala_keluargas_count }}</p>
                            <a href="{{ route('user.kepalaKeluarga', $lingkungan->id) }}" class="btn btn-primary mt-auto">Lihat Kepala Keluarga</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection

@push('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
@endpush
