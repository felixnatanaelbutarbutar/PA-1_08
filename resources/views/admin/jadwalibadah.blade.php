@extends('layout.admin2')
@section('content')
@php
use Carbon\Carbon;
@endphp

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0">Jadwal Ibadah</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Jadwal Ibadah</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;"> Jadwal Ibadah</h1>

  <div class="container">
    <a href="/tambahjadwal" type="button" class="btn btn-success">Tambah +</a>
    <div class="row ">
      @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{  $message }}
      </div>
      @endif

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Ibadah</th>
              <th scope="col">Ayat Alkitab</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">Pelayan Ibadah</th>
              <th scope="col">Lokasi Ibadah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            @foreach($data as $index => $row) 
            <tr>
              <th scope="row">{{ $index + $data->firstitem() }}</th> <!-- firstitem agar nomor terurut walau dipagination berbeda-->

              <td>{{ $row->namaibadah }}</td>
              <td>{{ $row->ayatalkitab }}</td>
              <td>{{ Carbon::parse($row->haritanggal)->translatedFormat('l, d F Y') }}</td>
              <td>{{ Carbon::parse($row->waktu)->format('H:i') }}</td>
                <td>{{ $row->pelayan }}</td>
              <td>{{ $row->lokasiibadah }}</td>


              <td>
                <a href="/tampilkanjadwal/{{ $row->id }}" type="button" class="btn btn-outline-warning waves-effect">Edit</a>
                <a href="#" class="btn btn-outline-danger waves-effec delete" nama="{{ $row->namaibadah }}" id="{{ $row->id }}">Delete</a>
              </td>
            </tr>
            <?php $i++?>
            @endforeach
          </tbody>
        </table>
        {{ $data->links() }}  

      </div>
    </div>
  </div>

  @endsection
  @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
  <script>
    $('.delete').click(function () {
      var id = $(this).attr('id');
      var nama = $(this).attr('namaibadah');
      Swal.fire({
        title: 'Yakin?',
        text: "Kamu akan menghapus data " + nama + "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus saja!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = "/deletejadwal/" + id + ""
          Swal.fire(
            'Dihapus!',
            'Data sudah terhapus',
            'success'
          )
        }
      })
    })
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
  @push('yu')
  <style>
  
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  </style>
      
  @endpush