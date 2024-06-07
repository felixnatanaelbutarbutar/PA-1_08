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
                <li class="breadcrumb-item active">Keuangan</li>
                <li class="breadcrumb-item active">Edit data Keuangan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <h1 class="text-center mb-4"style="font-family: 'Josefin Sans', sans-serif;">Edit data Keuangan</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">

                <div class="card-body">
                    <form action="/updatekeuangan/{{ $data->id }}" method="POST" enctype="multipart/form-data ">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hari & tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="exampleInputEmail1" value="{{ $data->tanggal }}"  aria-describedby="emailHelp">
                        </div>
                     
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">kategori</label>
                            <select class="form-control select2" name="kategori" aria-label=".form-select-lg example">
                              <option selected>{{ $data->kategori }} </option>
                              <option value="1">Kas Gereja</option>
                              <option value="2">Persembahan</option>
                              <option value="3">Dana Sosial</option>
                              <option value="4">Donasi</option>
                              <option value="5">Lainnya</option>
                            </select>
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Pemasukan</label>
                            <input type="text" class="form-control" name="pemasukan" id="exampleInputEmail1" value="{{ $data->pemasukan }}" aria-describedby="emailHelp">
                
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Pengeluaran</label>
                            <input type="text" class="form-control" name="pengeluaran" id="exampleInputEmail1" value="{{ $data->pengeluaran }}" aria-describedby="emailHelp">
                
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="5">{{ $data->keterangan }}</textarea>
                        </div>
                        <div class="mb-3 form-check">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection

            
            
@push('sss')
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const form = document.querySelector('form');
    const tanggal = document.querySelector('[name="tanggal"]');
    const pemasukan = document.querySelector('[name="pemasukan"]');
    const pengeluaran = document.querySelector('[name="pengeluaran"]');
    
    
    form.addEventListener('submit', (event) => {
        if (tanggal.value === '' ||  pemasukan.value === 'Pilih Jenis Kelamin' || pengeluaran.value === '') {
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