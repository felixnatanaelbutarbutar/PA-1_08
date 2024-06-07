@extends('layout.admin2')

@section('content')
    <!-- Content Header (Page header) -->

           
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
              <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <h1 class="text-center mt-4"style="font-family: 'Josefin Sans', sans-serif;">Tambah Photo</h1>
    <div class="container">
        <form method="POST" action="/insertphoto" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama">Judul</label>
              <input type="text" class="form-control" id="wkwkw" name="nama" />
          </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="wkws" name="photo" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
