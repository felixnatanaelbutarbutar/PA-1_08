@extends('layout.user')
@section('content') 
@php
use Carbon\Carbon;
@endphp

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url(assets/img/hero-carousel/gereja.jpg)">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>Jadwal Ibadah</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Jadwal Ibadah</li>
      </ol>
    </div>
  </div>
  </div><!-- End Breadcrumbs -->
<br>


<div class="container">


    <div style="overflow-x: auto">
      <table class="table">
        <tr>
          <th>No</th>
          <th>Nama Ibadah</th>
          <th>Ayat Alkitab</th>
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Pelayan Ibadah</th>
          <th>Lokasi Ibadah</th>
        </tr>
        <?php $i=1 ?>
        @foreach($data as $row)
        <tr>
          <th scope="row"><?= $i ?></th>
          <td>{{ $row->namaibadah }}</td>
          <td>{{ $row->ayatalkitab }}</td>
          <td>{{ Carbon::parse($row->haritanggal)->translatedFormat('l, d F Y') }}</td>
          <td>{{ Carbon::parse($row->waktu)->format('H:i') }}</td>
          <td>{{ $row->pelayan }}</td>
          <td>{{ $row->lokasiibadah }}</td>
      
        </tr>
        <?php $i++?>
        @endforeach
      </table>
    </div>


</div>
  
@endsection
@push('jadwalibadah')
<style>
  table {
    width: 100%;
  }
  th,
  td {
    text-align: left;
    padding: 8px;
  }
</style>
    
@endpush