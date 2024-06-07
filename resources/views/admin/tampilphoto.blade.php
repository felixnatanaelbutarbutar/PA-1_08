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
                <li class="breadcrumb-item active">Galery</li>
                <li class="breadcrumb-item active">Edit Galery</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <h1 class="text-center mt-4"style="font-family: 'Josefin Sans', sans-serif;">Edit Galery</h1>
    <div class="container">
        <form method="POST" action="/updatephoto/{{ $data->id }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="photolama" value="{{ $data->photo }}">
            <div class="form-group">
                <label for="nama">Judul</label>
                <input type="text" class="form-control" id="judul" name="nama"  value="{{ $data->nama }}" >
            </div>
                {{-- @error('judul')
                  <span class="text-danger" > {{ $message }}</span>                    
                @enderror --}}

            <div class="form-group">
              <label for="photo">Photo</label>
              
              <input type="file" class="form-control" id="photo" name="photo" >
            </div>
            <div class="form-group">
            <img src="{{ asset($data->photo) }}" alt="" style="width:350px" height="250px">
            </div>
            {{-- @error('photo')
            <span class="text-danger" > {{ $message }}</span>                    
            @enderror --}}
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>




@endsection