@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/hero-carousel/gereja.jpg') }}')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Data Jemaat Per Keluarga</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Data jemaat</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <br><br>
    <div class="container mt-5">
    <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Anggota Keluarga dari {{ $kepalaKeluarga->namakeluarga }}</h1>

    <div class="row">
        @foreach ($anggotaKeluargas as $anggotaKeluarga)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">{{ $anggotaKeluarga->nama }}</h5>
                    <p class="card-text">Tanggal Lahir:<strong> {{ $anggotaKeluarga->tanggallahir  }}</strong></p>
                    <p class="card-text">Umur:<strong> {{ \Carbon\Carbon::parse($anggotaKeluarga->tanggallahir)->age }}</strong></p>
                    <p class="card-text">Jenis Kelamin:<strong> {{ $anggotaKeluarga->jeniskelamin }}</strong></p>
                    <p class="card-text">Alamat:<strong>{{ $anggotaKeluarga->alamat }}</strong></p>
                    <p class="card-text">Status Baptis:<strong> {{ $anggotaKeluarga->baptis }}</strong></p>
                    <p class="card-text">Status Sidi:<strong> {{ $anggotaKeluarga->sidi }}</strong></p>
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



