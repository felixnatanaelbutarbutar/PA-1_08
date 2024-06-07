@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Kepala Keluarga di Lingkungan {{ $lingkungan->nama }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kepala Keluarga</li>
                        <li class="breadcrumb-item active">Tambah Kepala Keluarga</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <div class="container">
        <form action="{{ route('kepala_keluargas.store', $lingkungan->id) }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="namakeluarga" class="form-label">Nama Kepala Keluarga:</label>
                <input type="text" class="form-control" id="namakeluarga" name="namakeluarga" required>
            </div>
            <div class="form-group mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group mb-3">
                <label for="peleantaon" class="form-label">Pelean Taon:</label>
                <input type="number" class="form-control" id="peleantaon" name="peleantaon">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection

@push('css')
<style>
    .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
    }
    .form-group label {
        font-weight: bold;
    }
</style>
@endpush
