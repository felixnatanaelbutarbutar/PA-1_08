<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin HKBP PEANAJAGAR</title>

  <link rel="icon shortcut" type="image/jpg" href="assets/img/cross.png" />
     <!-- Google Font: Source Sans Pro -->

     <link
     rel="stylesheet"
     href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
   />
   <!-- Font Awesome Icons -->
   <link
     rel="stylesheet"
     href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}"
   />
   <!-- overlayScrollbars -->
   <link
     rel="stylesheet"
     href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"
   />
   <!-- Theme style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <link
     rel="stylesheet"
     href="{{ asset('admin/dist/css/adminlte.min.css') }}"/>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Rowdies:wght@300&family=Tilt+Prism&display=swap');

  </style>

     @stack('keuangan.css')
     @stack('css')
     @stack('ya')
     @stack('ye')
     @stack('yu')
     @stack('yi')


</head>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Foldit&family=Kanit&family=Playfair+Display&family=Rubik+80s+Fade&family=Tilt+Prism&display=swap');
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li> --}}
        {{-- <li class="nav-item d-none d-sm-inline-block">
          <a href="https://api.whatsapp.com/send?phone=6281369284351" class="nav-link">Kirim Pesan Ke Developer</a>
        </li> --}}
    </ul>


    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('logout') }}" class="login">Logout</a>
      </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/gereja/logo.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
  
      <div class="info">
        <a href="#" class="d-block">ADMIN HKBP</a>
      </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="/index" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}
              <li class="nav-item">
                <a href="/lingkungans/index" class="nav-link">
                   <i class="nav-icon fas fa-id-card"></i>
                  <p>Data Jemaat</p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li>  --}}
              <li class="nav-item">
                <a href="/pengumumanjemaat" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>  
                  <p>Pengumuman Jemaat</p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

              <li class="nav-item">
                <a href="/jadwalibadah" class="nav-link">
                <i class="nav-icon fas fa-praying-hands"></i>  
                  <p>Jadwal Ibadah</p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

              <li class="nav-item">
                <a href="/keuangan" class="nav-link">
                  <i class="nav-icon fas fa-wallet"></i>
                    <p>Informasi Keuangan</p>
                  </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

                <li class="nav-item">
                  <a href="/donasi" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-heart"></i>
                    <p>Data Donasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/photo" class="nav-link">
                  <i class="nav-icon far fa-image"></i>

                    <p>Galeri</p>
                  </a>
                </li>
            </ul>
          </li>

        

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 
    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 HKBP PEANAJAGAR.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>2024</b>
    </div>
  </footer>
</div>
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->  
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard2.js') }}"></script>
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@stack('scripts')
@stack('scriptss')
@stack('scriptsss')
@stack('scriptssss')
@stack('scriptsssss')
@stack('s')
@stack('d')
@stack('dd')
@stack('ddd')
@stack('ss')
@stack('sss')
@stack('scriptssssss')
@stack('script')
@stack('photo')
@stack('pengumuman')

</body>
</html>

