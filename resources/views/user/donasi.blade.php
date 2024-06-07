@extends('layout.user')

@php
use Carbon\Carbon;
@endphp

@push('csss')
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endpush

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url(assets/img/hero-carousel/gereja.jpg)">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Donasi</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/jadwalibadahh">Donasi</a></li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <br><br>
    <div class="container">
        <div class="table-responsive">
            <table class="table" id="y">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Pemberi</th>
                        <th scope="col">Jenis Donasi</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1?>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td>{{ Carbon::parse($row->tanggal)->format('D d M Y') }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jenis }}</td>
                        <td>{{ 'Rp ' . number_format($row->jumlah, 0, ',', '.') }}</td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

@push('jss')
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>

<script>
$(document).ready( function () {
    $('#y').DataTable();
} );
</script>
@endpush
