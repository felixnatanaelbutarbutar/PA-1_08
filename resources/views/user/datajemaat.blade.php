@extends('layout.user')

@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url(assets/img/hero-carousel/gereja.jpg)">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Data Jemaat</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Data jemaat</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <br><br>

    <div class="container">
        <div class="table-responsive">
            <table class="table" id="myTable">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Status Baptis</th>
                        <th scope="col">Status Sidi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Pelean Taon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    @foreach ($data as $row)
                    <tr>
                        <td><?= $nomor ?></td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>{{ $row->tempat }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->baptis }}</td>
                        <td>{{ $row->sidi }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->notelpon }}</td>
                        <td>{{ 'Rp ' . number_format($row->peleantaon, 0, ',', '.') }}</td>
                    </tr>
                    <?php $nomor++; ?>
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
