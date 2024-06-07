@push('jsss')
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#y').DataTable();
} );
</script>
@endpush
@push('cssss')
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
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
@extends('layout.user')
@section('content')

  <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url(assets/img/hero-carousel/gereja.jpg)">
<div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
<h2>Keuangan</h2>
<ol>
 <li><a href="/">Home</a></li>
 <li>Keuangan</li>

</ol>
</div>
</div>
</div><!-- End Breadcrumbs -->

  <br>
    <div class="container">
      <!-- /.card-header -->
      <div style="overflow-x: auto">
        <table class="table">
          <thead>
            <tr>
              {{-- <th scope="col">No</th> --}}
              <th scope="col" >Tanggal</th>
              <th scope="col">Kategori</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Pemasukan</th>
              <th scope="col">Pengeluaran</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1; ?>
            @foreach ($data as $row)
                
            <tr>
              <td >{{ $row->tanggal }}</td>
            {{-- <th scope="row"> </th> --}}
            <td >{{ $row->kategori }}</td>
            <td> <p> {!! nl2br(e($row->keterangan)) !!}</p>  
            <td>
                @if ($row->pemasukan == 0)
                    -
                @else
                    Rp.{{ number_format($row->pemasukan, 0, ',', '.') }}
                @endif
            </td>
            <td>
                @if ($row->pengeluaran == 0)
                  -
                @else
                Rp.{{ number_format($row->pengeluaran,0,',','.') }}
                @endif
            </td>
            </tr>
            @endforeach
            <tr>
              <td></td>
            {{-- <th scope="row"> </th> --}}
            <td></td>
            <td style="text-align: right;" >TOTAL </td>
            <td>Rp.{{ number_format($pengeluaran ,0,',','.') }}</td>
            <td> Rp.{{ number_format($pemasukan ,0,',','.') }}</td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: right;" >TOTAL SALDO</td>
            <td>Rp.{{ number_format($saldo ,0,',','.') }}</td>
            {{-- <td> Rp.{{ number_format($pemasukan ,0,',','.') }}</td> --}}
            </tr>

          </tbody>
          
        </table>
      </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  
</div>
    
@endsection
