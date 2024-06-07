<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PENGURUS GEREJA HKBP PEANAJAGAR</title>

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
     href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" daong
   />
   <!-- Theme style -->
   <link
     rel="stylesheet"
     href="{{ asset('admin/dist/css/adminlte.min.css') }}"
     @stack('css')/>
  <link href="assets/css/dashboardadmin.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Rowdies:wght@300&family=Tilt+Prism&display=swap');
  
  
  </style>
  
  
</head>

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
        <a href="{{ route('logout') }}" class="login">Logout</a> <!-- css logoutnya di {{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}-->
      </li>
      </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/gereja/logo.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
  
      <div class="info">
        <a href="#" class="d-block">ADMIN HKBP PEANAJAGAR</a>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/index" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

              <li class="nav-item">
                <a href="/lingkungans/index" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                  <p>Data Jemaat</p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li>  --}}
              <li class="nav-item">
                <a href="/pengumumanjemaat" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>  
                  <p>Pengumuman</p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

              <li class="nav-item">
                <a href="/jadwalibadah" class="nav-link">
                <i class="nav-icon fas fa-calendar"></i>  
                  <p>Jadwal Ibadah</p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

              <li class="nav-item">
                <a href="/keuangan" class="nav-link">
                  <i class="nav-icon fas fa-money-bill"></i>
                    <p>Informasi Keuangan</p>
                  </a>
                </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

                <li class="nav-item">
                  <a href="/donasi" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
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
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Selamat datang dihalaman admin</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content-wrapper -->
<div id="datagereja">
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        
       
        <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Akses Cepat ke Halaman Pengguna</h1>

          {{-- <p>Berikut adalah yang dapat diihat oleh semua jemaat</p> --}}

        <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 service-item" data-aos="fade-up" data-aos-delay="100">
        <div class="icon">
          <i class="bi bi-calendar-date-fill"></i>
        </div>
        <h3>Jadwal Ibadah</h3>
        <p class="rawr">Berisi Jadwal Ibadah HKBP PEANAJAGAR. Dan diupdate pada sabtu dan minggu.</p>
        <a href="/jadwalibadahh" class="readmore stretched-link">Lihat Detail <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="col-lg-4 col-md-6 service-item" data-aos="fade-up" data-aos-delay="200">
        <div class="icon">
          <i class="nav-icon fas fa-bullhorn"></i>
        </div>
        <h3>Pengumuman</h3>
        <p class="rawr">Berisi pengumuman jemaat seperti surat dari HKBP Pusat, Pemerintah, Kesehatan, dan lain-lain</p>
        <a href="/pengumumanjemaatt" class="readmore stretched-link">Lihat Detail <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="col-lg-4 col-md-6 service-item" data-aos="fade-up" data-aos-delay="300">
        <div class="icon">
          <i class="bi bi-person-vcard"></i>
        </div>
        <h3>Data Jemaat</h3>
        <p class="rawr">Berisi semua data jemaat HKBP PEANAJAGAR yang sudah terdaftar didalam gereja.</p>
        <a href="/datajemaatt" class="readmore stretched-link">Lihat Detail <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 service-item" data-aos="fade-up" data-aos-delay="400">
        <div class="icon">
          <i class="bi bi-cash-coin"></i>
        </div>
        <h3>Informasi Keuangan</h3>
        <p class="rawr">Berisi Pemasukan dan pengeluaran gereja.</p>
        <a href="/keuangann" class="readmore stretched-link">Lihat Detail <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="col-lg-4 col-md-6 service-item" data-aos="fade-up" data-aos-delay="500">
        <div class="icon">
          <i class="bi bi-gift"></i>
        </div>
        <h3>Data Donasi</h3>
        <p class="rawr">Pencatatan donasi dari setiap pemberi ke gereja dan akan dimasukkan ke kas gereja.</p>
        <a href="/donasii" class="readmore stretched-link">Lihat Detail <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="col-lg-4 col-md-6 service-item" data-aos="fade-up" data-aos-delay="600">
        <div class="icon">
          <i class="bi bi-image"></i>
        </div>
        <h3>Galeri</h3>
        <p class="rawr">Berisi photo photo gereja mulai dari photo lama sampai dengan photo terbaru ,sebagai kenang kenangan gereja.</p>
        <a href="/photoo" class="readmore stretched-link">Lihat Detail <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>
      </div>
    </div>
<br><br>
      </div>
    </section><!-- End Services Section --> 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 HKBP PEANAJAGAR</strong>
    All rights reserved.
    
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
<script src="assets/js/jquery-3.6.4.min.js"></script>
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

</body>
</html>

