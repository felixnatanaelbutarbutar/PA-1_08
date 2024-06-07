@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Anggota Keluarga</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Anggota Keluarga</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <form action="{{ route('anggota_keluargas.store', [$lingkungan->id, $kepalaKeluarga->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempatlahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required>
            </div>
            <div class="form-group">
                <label for="tanggallahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
            </div>
            <div class="form-group">
                <label for="baptis">Status Baptis</label>
                <select class="form-control" id="baptis" name="baptis">
                    <option value="Sudah Baptis">Sudah Baptis</option>
                    <option value="Belum Baptis">Belum Baptis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sidi">Status Sidi</label>
                <select class="form-control" id="sidi" name="sidi">
                    <option value="Sudah Sidi">Sudah Sidi</option>
                    <option value="Belum Sidi">Belum Sidi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="notelpon">No Telepon</label>
                <input type="text" class="form-control" id="notelpon" name="notelpon" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
