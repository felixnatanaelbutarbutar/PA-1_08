@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pengurus Gereja</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pengurus</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <div class="row mb-4">
      <div class="col-12">
        <a href="{{ route('pengurus.create') }}" class="btn btn-success">Tambah Pengurus</a>
        @if(session('success'))
          <div class="alert alert-success mt-2">
            {{ session('success') }}
          </div>
        @endif
      </div>
    </div>
    

    <div class="row">
        @foreach($pengurus as $item)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('image/foto_pengurus/' . $item->foto) }}" alt="{{ $item->nama }}" style="width:100%">
                    <div class="container">
                        <center>
                            <h2 class="jockey-one-regular">{{ $item->nama }}</h2>
                            <h3 class="itim-regular">{{ $item->jabatan }}</h3>
                            <a href="{{ route('pengurus.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pengurus.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $('button[type="submit"]').click(function(event){
    event.preventDefault();
    var form = $(this).closest('form');
    Swal.fire({
      title: 'Yakin?',
      text: "Kamu akan menghapus data tersebut?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus saja!'
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();
        Swal.fire(
          'Dihapus!',
          'Data sudah terhapus',
          'success'
        )
      }
    })
  });
</script>
@endpush

@push('styles')
<style>
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>
@endpush
