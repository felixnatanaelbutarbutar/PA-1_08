@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota Keluarga</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Anggota Keluarga dari {{ $kepalaKeluarga->namakeluarga }}</h1>
    <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Kepala Keluarga di Lingkungan {{ $lingkungan->nama }}</h1>

    <div class="container">
        <a href="{{ route('anggota_keluargas.create', [$lingkungan->id, $kepalaKeluarga->id]) }}" class="btn btn-success mb-2">Tambah Anggota Keluarga</a>
        <div class="table-responsive">
            <table class="table table-striped" id="myTable">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Status Baptis</th>
                        <th scope="col">Status Sidi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggotaKeluargas as $index => $anggota)
                    <tr>
                        <td>{{ $index + $anggotaKeluargas->firstItem() }}</td>
                        <td>{{ $anggota->nama }}</td>
                        <td>{{ $anggota->jeniskelamin }}</td>
                        <td>{{ $anggota->tempatlahir }}</td>
                        <td>{{ \Carbon\Carbon::parse($anggota->tanggallahir)->translatedFormat('l, d F Y') }}</td>
                        <td>{{ $anggota->baptis }}</td>
                        <td>{{ $anggota->sidi }}</td>
                        <td>
                            <a href="{{ route('anggota_keluargas.edit', [$lingkungan->id, $kepalaKeluarga->id, $anggota->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('anggota_keluargas.destroy', [$lingkungan->id, $kepalaKeluarga->id, $anggota->id]) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus anggota keluarga ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $anggotaKeluargas->links() }}
        </div>
    </div>

@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
@endpush
