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
    <div class="container">
        <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Anggota Keluarga dari {{ $lingkungan->nama }}</h1>
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Keluarga</th>
                        <th>Alamat</th>
                        <th>Pelean Taon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kepalaKeluargas as $index => $kepalaKeluarga)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $kepalaKeluarga->namakeluarga }}</td>
                            <td>{{ $kepalaKeluarga->alamat }}</td>
                            <td>{{ 'Rp ' . number_format($kepalaKeluarga->peleantaon, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('user.anggotaKeluarga', $kepalaKeluarga->id) }}" class="btn btn-primary">Lihat Anggota Keluarga</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>    
            </table>
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
