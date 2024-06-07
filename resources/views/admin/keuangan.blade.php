@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Data Donasi</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Keuangan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <body>
        <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Halaman Keuangan</h1>
        <div class="container">
            <a href="/tambahkeuangan" type="button" class="btn btn-success">Tambah +</a>
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            {{-- <th scope="col">No</th> --}}
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Pemasukan</th>
                            <th scope="col">Pengeluaran</th>
                            {{-- <th scope="col">Jumlah Pengeluaran</th> --}}
                            <th>aksi</th>
                        </tr>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->tanggal }}</td>
                            <td>{{ $row->kategori }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td>Rp.{{ number_format($row->pemasukan,0,',','.') }}</td>
                            <td>Rp.{{ number_format($row->pengeluaran,0,',','.') }}</td>
                            <td>
                                <a href="/tampilkankeuangan/{{ $row->id }}" type="button"
                                    class="btn btn-outline-warning waves-effect">Edit</a>
                                <a href="#" class="btn btn-outline-danger waves-effect delete " id="{{ $row->id }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            {{-- <th scope="row"> </th> --}}
                            <td></td>
                            <td style="text-align: right;">TOTAL</td>
                            <td>Rp.{{ number_format($pengeluaran,0,',','.') }}</td>
                            <td>Rp.{{ number_format($pemasukan,0,',','.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            {{-- <th scope="row"> </th> --}}
                            <td></td>
                            <td></td>
                            <td>SALDO</td>
                            <td>Rp.{{ number_format($saldo,0,',','.') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</div>
<div>

@endsection

@push('keuangan.css')
<style>
@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Rowdies:wght@300&family=Tilt+Prism&display=swap');

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 10px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
@endpush

@push('s')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script>
    $('.delete').click(function(){
        var id = $(this).attr('id');
        Swal.fire({
            title: 'Yakin?',
            text: "Kamu akan menghapus data tersebut",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location="/deletekeuangan/"+id+"";
                Swal.fire(
                    'Dihapus!',
                    'Data sudah terhapus',
                    'success'
                );
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
@endpush
    