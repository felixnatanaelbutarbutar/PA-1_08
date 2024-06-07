@extends('layout.admin2')
@section('content')
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Data Jemaat</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Jemaat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
 
  <h1 class="text-center mt-2"style="font-family: 'Josefin Sans', sans-serif;">Edit  Jadwal Ibadah</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="/updatejadwal/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
                
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Ibadah</label>
              <input type="text" class="form-control" name="namaibadah" value="{{ $data->namaibadah }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Ayat Alkitab</label>
              <input type="text" class="form-control" name="ayatalkitab"value="{{ $data->ayatalkitab }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>              
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Hari & Tanggal</label>
              <input type="date" class="form-control" name="haritanggal" value="{{ $data->haritanggal }}" id="exampleInputPassword1" >
            </div> 
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Waktu</label>
              <input type="time" class="form-control" name="waktu" value="{{ $data->waktu }}" id="exampleInputPassword1" >
            </div> 
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Pelayan Ibadah</label>
              <input type="text" class="form-control" name="pelayan" id="exampleInputEmail1" value="{{ $data->pelayan }}" aria-describedby="emailHelp">
            </div> 
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Lokasi Ibadah</label>
              <input type="text" class="form-control" name="lokasiibadah" id="exampleInputEmail1" value="{{ $data->lokasiibadah }}" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</body> 
    
@endsection
  @push('scriptsss')
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      const form = document.querySelector('form');
      const namaibadah = document.querySelector('[name="namaibadah"]');
      const ayatalkitab = document.querySelector('[name="ayatalkitab"]');
      const haritanggal = document.querySelector('[name="haritanggal"]');
  
    
      form.addEventListener('submit', (event) => {
        if (namaibadah.value === '' || ayatalkitab.value === '' || haritanggal.value === '') {
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