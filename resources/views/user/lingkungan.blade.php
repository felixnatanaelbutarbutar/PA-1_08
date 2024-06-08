@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<style>
    .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        border: none;
        border-radius: 10px;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    .breadcrumbs {
        text-align: center;
        color: #fff;
        font-size: 1.5rem;
        background-size: cover;
        background-position: center;
        padding: 60px 0;
    }
    .card-title {
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        font-size: 1.25rem;
        color: #333;
    }
    .card-text {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #777;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.2s ease-in-out;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-light-blue {
        background-color: #4377c4dd;
        border: none;
        color: #fff;
        transition: background-color 0.2s ease-in-out;
    }
    .btn-light-blue:hover {
        background-color: #87ceeb;
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
                <li>Data Jemaat</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <br><br>
    <div class="container">
        <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Lingkungan/Sektor HKBP Peanajagar</h1>

        <div class="row">
            @foreach ($lingkungans as $lingkungan)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> {{ $lingkungan->nama }}</h5>
                            <p class="card-text"><i class="fas fa-users"></i> Jumlah Kepala Keluarga: {{ $lingkungan->kepala_keluargas_count }}</p>
                            <a href="{{ route('user.kepalaKeluarga', $lingkungan->id) }}" class="btn btn-light-blue mt-auto"><i class="fas fa-eye"></i> Lihat Kepala Keluarga</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
@endpush
