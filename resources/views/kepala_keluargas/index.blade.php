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
                        <li class="breadcrumb-item active">Kepala Keluarga</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Data Per Keluarga di Lingkungan {{ $lingkungan->nama }}</h1>

    <div class="container">
        <a href="{{ route('kepala_keluargas.create', $lingkungan->id) }}" type="button" class="btn btn-success mb-2">Tambah Kepala Keluarga</a>
        <div class="table-responsive">
            <table class="table table-bordered">
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
                                <a href="{{ route('kepala_keluargas.edit', ['lingkungan' => $lingkungan->id, 'kepala_keluarga' => $kepalaKeluarga->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-outline-danger waves-effect delete" data-id="{{ $kepalaKeluarga->id }}" data-lingkungan-id="{{ $lingkungan->id }}" data-nama="{{ $kepalaKeluarga->namakeluarga }}">Delete</a>
                                <a href="{{ route('anggota_keluargas.index', ['lingkunganId' => $lingkungan->id, 'kepalaKeluargaId' => $kepalaKeluarga->id]) }}" class="btn btn-outline-danger waves-effect">Lihat anggota keluarga</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>    
            </table>
        </div>
    </div>
<!-- </div> -->
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete').click(function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var lingkunganId = $(this).data('lingkungan-id');
        var nama = $(this).data('nama');
        
        Swal.fire({
            title: 'Yakin?',
            text: "Anda akan menghapus data " + nama + "?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/lingkungans/' + lingkunganId + '/kepala_keluargas/' + id,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                        // Hapus baris tabel yang sesuai dari DOM
                        $('[data-id="' + id + '"]').closest('tr').remove();

                        Swal.fire(
                            'Dihapus!',
                            'Data sudah terhapus',
                            'success'
                        );
                    },
                    error: function(xhr, status, error) {
                        Swal.fire(
                            'Error!',
                            'Gagal menghapus data: ' + error,
                            'error'
                        );
                    }
                });
            }
        });
    });
});
</script>
@endpush
