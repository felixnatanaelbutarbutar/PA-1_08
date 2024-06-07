@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Anggota Keluarga</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Anggota Keluarga</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <form action="{{ route('anggota_keluargas.update', [$lingkungan->id, $kepalaKeluarga->id, $anggotaKeluarga->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggotaKeluarga->nama }}" required>
            </div>
            <div class="form-group">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                    <option value="Laki-laki" {{ $anggotaKeluarga->jeniskelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $anggotaKeluarga->jeniskelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempatlahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="{{ $anggotaKeluarga->tempatlahir }}" required>
            </div>
            <div class="form-group">
                <label for="tanggallahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="{{ $anggotaKeluarga->tanggallahir }}" required>
            </div>
            <div class="form-group">
                <label for="baptis">Status Baptis</label>
                <select class="form-control" id="baptis" name="baptis">
                    <option value="Sudah Baptis" {{ $anggotaKeluarga->baptis == 'Sudah Baptis' ? 'selected' : '' }}>Sudah Baptis</option>
                    <option value="Belum Baptis" {{ $anggotaKeluarga->baptis == 'Belum Baptis' ? 'selected' : '' }}>Belum Baptis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sidi">Status Sidi</label>
                <select class="form-control" id="sidi" name="sidi">
                    <option value="Sudah Sidi" {{ $anggotaKeluarga->sidi == 'Sudah Sidi' ? 'selected' : '' }}>Sudah Sidi</option>
                    <option value="Belum Sidi" {{ $anggotaKeluarga->sidi == 'Belum Sidi' ? 'selected' : '' }}>Belum Sidi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $anggotaKeluarga->alamat }}" required>
            </div>
            <div class="form-group">
                <label for="notelpon">No Telepon</label>
                <input type="text" class="form-control" id="notelpon" name="notelpon" value="{{ $anggotaKeluarga->notelpon }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
