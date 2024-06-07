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
            <li class="breadcrumb-item active">Tambah Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

    <h1 class="text-center mt-4" style="font-family: 'Josefin Sans', sans-serif;">Tambah Donasi</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdonasi" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                              <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal" aria-describedby="emailHelp">
                      
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Dasar Memberi</label>
                                <!-- <input type="text" class="form-control" name="jenis" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                                <textarea class="form-control" name="jenis" id="exampleInputEmail1" rows="5" aria-describedby="emailHelp"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Pemberi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp">
                        
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                              <input type="text" class="form-control"name="jumlah" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
      
@endsection

 @push('dd')
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
   const form = document.querySelector('form');
   const tanggal = document.querySelector('[name="tanggal"]');
   const jenis = document.querySelector('[name="jenis"]');
   const nama = document.querySelector('[name="nama"]');
   const jumlah = document.querySelector('[name="jumlah"]');

 
   form.addEventListener('submit', (event) => {
     if (tanggal.value === '' || jenis.value === '' || nama.value === ''|| jumlah.value === '') {
       event.preventDefault();
       Swal.fire({
         icon: 'error',
         title: 'Oops...',
         text: 'Harap isi semua data yang diperlukan!'
       });
     }
   });
 </script> 
     
 @endpush

    