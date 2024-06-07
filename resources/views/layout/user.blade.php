<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <link rel="icon shortcut" type="image/jpg" href="assets/img/cross.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetsz/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/css/dipam.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/fonts/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/fonts/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/fonts/linericon/stQAWSEDWSQAasyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/fonts/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/css/baguetteBox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsz/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />



  <!-- <link rel="stylesheet" href="/assets/css/login.css"> -->

    <link rel="stylesheet" href="{{asset('assetsz/css/baguetteBox.min.css') }}">
    @stack('css')
    @stack('csss')
    @stack('jadwalibadah')
    @stack('cssss')
    <style>
      .navbar{
        background-color: transparent;
      }
    </style>

    <title>HKBP PEANAJAGAR</title>
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Foldit&family=Kanit&family=Playfair+Display&family=Rubik+80s+Fade&family=Tilt+Prism&display=swap');
    
  </style>
  <body>
  
   <!-- ======= Header ======= -->
   <header id="header" class="header d-flex align-items-cente ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('user.dashboard') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>HKBP<span>PEANAJAGAR.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" >Home</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Gereja</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="/">Sejarah Gereja</a></li>
            <li><a href="/">Visi Misi Gereja</a></li>
            <li><a href="/">Pelayan Gereja</a></li>
            <li><a href="/">Data Gereja</a></li>
            <li><a href="/">Contact & alamat</a></li>
          </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Jadwal ibadah & pengumuman Jemaat</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/jadwalibadahh">Jadwal Ibadah</a></li>
              <li><a href="/pengumumanjemaatt">Pengumuman Jemaat</a></li>
            </ul>
         </li>
         <li class="dropdown"><a href="#"><span>Jemaat & Keuangan</span> <i
          class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="/lingkungan">Data Jemaat</a></li>
            <li><a href="/keuangann">Informasi Keuangan</a></li>
            <li><a href="/donasii">Donasi </a></li>
          </ul>
        </li>
          <li><a href="/photoo">Galeri </a></li>
          <li><a href="/login">Login</a></li>
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    @yield('content')
    <footer class="ftco-footer ftco-bg-dark ftco-section mt-3" id="5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo">Gereja <span>HKBP PEANAJAGAR</span></h2>
              <p>“Apapun yang Tuhan perintahkan, berlakulah, percaya bahwa itu terbaik bagimu”<br> ~ Inger Ludwig Nommensen</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate">
                  <a href="#"><span class="mdi mdi-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="mdi mdi-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="mdi mdi-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Quick Link</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="/" class="py-1 d-block"><span class="mdi mdi-view-dashboard mr-3"></span>Home</a>
                </li>
               
                <li>
                  <a href="/pengumumanjemaatt" class="py-1 d-block"><span class="mdi mdi-newspaper mr-3"></span>Pengumuman Jemaat</a>
                </li>
                <li>
                  <a href="/lingkungan" class="py-1 d-block"><span class="mdi mdi-human-male-female mr-3"></span>Data Jemaat</a>
                </li>
                <li>
                  <a href="/jadwalibadahh" class="py-1 d-block"><span class="mdi mdi-calendar mr-3"></span>Jadwal Ibadah</a>
                </li>
                <li>
                  <a href="/photoo" class="py-1 d-block"><span class="fa fa-camera-retro mr-3"></span>Galeri</a>
                </li>
              </ul>
            </div>
        </div>
  
  
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Agenda Kegiatan</h2>
              <div class="opening-hours">
                <p>Minggu Pagi<span class="mb-3">09:00 am</span></p>
                <p>Minggu Siang <span class="mb-3">10:30 am</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assetsz/js/mdb.min.js') }}"></script>
    <script src="{{ asset('assetsz/js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('assetsz/js/popper.min.js') }}"></script>
    <script src="{{ asset('assetsz/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetsz/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('assetsz/js/glightbox.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
      baguetteBox.run(".tz-gallery");
    </script>
    @stack('js')
    @stack('jss')
    @stack('jsss')


    @stack('pengumuman')
    {{-- <script>
      // When the user scrolls down 20px from the top of the document, slide down the navbar
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 5) {
          $("body").addClass("fixed-nav");
        } else {
          $("body").removeClass("fixed-nav");
        }
      }
    </script> --}}
  </body>
</html>
