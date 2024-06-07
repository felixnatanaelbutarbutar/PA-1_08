@extends('layout.user')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  </style>
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url(assets/img/hero-carousel/gereja.jpg)">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>Galeri Jemaat</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Galeri</li>
      </ol>
    </div>
  </div>
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($data as $row)
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset($row->photo)}}" style="width: 100% ; height:15em " class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $row->nama }}</h4>
                  <a href="{{ asset($row->photo)}}" title="{{ $row->nama }}" data-gallery="portfolio-gallery-remodeling"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
                <br><br>
              </div>
            </div><!-- End Projects Item -->
          @endforeach
        </div><!-- End Projects Container -->
      </div>
    </div>
  </section><!-- End Our Projects Section -->

  <div class="d-flex justify-content-center mt-3">
    {{ $data->links('pagination::simple-bootstrap-5') }}
  </div>

</main>

@endsection

<style>
  .slider {
    text-align: center;
    margin-top: 20px;
  }

  .pagination {
    display: inline-block;
    padding-left: 0;
    list-style: none;
    border-radius: 4px;
  }

  .pagination li {
    display: inline;
  }

  .pagination li a, .pagination li span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
  }

  .pagination li a:hover, .pagination li span:hover, .pagination li a:focus, .pagination li span:focus {
    color: #23527c;
    background-color: #eee;
    border-color: #ddd;
  }

  .pagination .active span {
    color: #fff;
    background-color: #337ab7;
    border: 1px solid #337ab7;
    cursor: default;
  }

  .pagination .disabled span {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border: 1px solid #ddd;
  }
</style>
