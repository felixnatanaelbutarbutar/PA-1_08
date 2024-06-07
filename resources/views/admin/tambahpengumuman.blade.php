@extends('layout.admin2')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Jemaat</li>
            <li class="breadcrumb-item active">Edit data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <h1 class="text-center mb-4"style="font-family: 'Josefin Sans', sans-serif;">Tambah pengumuman Jemaat</h1>

    <br><br>
    <div class="container">
        <form method="POST" action="/insertpengumuman" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="photo_lama" value="">
            <div class="form-group">
                <label for="nama">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" >
            </div>
                @error('judul')
                  <span class="text-danger" > {{ $message }}</span>                    
                @enderror
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            @error('Keterangan')
            <span class="text-danger" > {{ $message }}</span>                    
          @enderror

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Hari & Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal">
          </div>
          @error('tanggal')
          <span class="text-danger" > {{ $message }}</span>                    
        @enderror


            <div class="form-group">
              <label for="photo">Photo</label>
              <input type="file" class="form-control" id="photo" name="photo" >
            </div>
            @error('photo')
            <span class="text-danger" > {{ $message }}</span>                    
            @enderror
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

   </div>
@endsection