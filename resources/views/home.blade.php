<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.145.0">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    
 <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">

    <link rel="apple-touch-icon" href="../assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="../assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="../assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="../assets/img/favicons/manifest.json">
<link rel="mask-icon" href="../assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="../assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .bi {
        width: 1em;
        height: 1em;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('carousel/carousel.css') }}">
  </head>
  <body>
    
    
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <img src="{{ asset('IMG/logo.png') }}" class="navbar-brand" href="#" width="50px" height="50px" style="filter: brightness(0) invert(1);">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kamar</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
                <button type="button" class="btn btn-outline-secondary">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
  </svg>
  Profile
</button>

      </div>
    </div>
  </nav>
</header>
@yield('navbar')
<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('IMG/bg-home.jpg') }}" alt="Bar Hotel" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1></h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('IMG/home.jpeg') }}" alt="Bar Hotel" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption">
            <p>Where elegance meets comfort. Indulge in world-class service, refined interiors, and a stay crafted for those who appreciate the finer things in life.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
         <img src="{{ asset('IMG/home2.jpeg') }}" alt="Bar Hotel" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption text-end">
            
            <p>Stay inspired. With modern facilities, seamless service, and thoughtful amenities, we make every business trip feel effortless.</p>
           
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <strong><h2 class="" style="text-align: center; margin: 20px; margin-top: 10px; ">Our service</h2></strong>
        <div class="features">
            <div class="feature-item">
                <img src="{{ asset('IMG/bg-car.png') }}" class="bd-placeholder-img " width="80" height="80" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/><br>
                <p>Layanan antar jemput</p>
            </div>

            <div class="feature-item">
                <img src="{{ asset('IMG/bg-clean.png') }}" class="bd-placeholder-img " width="80" height="80" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/><br>
                <p>Service cleaning</p>
            </div>

            <div class="feature-item">
                <img src="{{ asset('IMG/bg-laundry.png') }}" class="bd-placeholder-img " width="80" height="80" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/><br>
                <p>laundry</p>
            </div>

            <div class="feature-item">
                <img src="{{ asset('IMG/bg-team.png') }}" class="bd-placeholder-img " width="80" height="80" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/><br>
                <p>Ruang meeting</p>
            </div>

            <div class="feature-item">
                <img src="{{ asset('IMG/bg-wifi.png') }}" class="bd-placeholder-img " width="80" height="80" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/><br>
                <p>Free wifi</p>
            </div>

        </div>
    </div>

    <!-- START THE FEATURETTES -->

        <div class="container py-lg-6">
          <!--row-->
          <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
              <div class="text-center mb-6 d-flex flex-column gap-2">
                <!--heading-->
                <h2 class="mb-0 mx-xl-8 h1" style="color: black;">Our rooms . <span style="color: grey;">Relax, and enjoy your vacation</span></h2>
                <!--para-->
                <p class="mb-0" style="color: black;">Choose your rooms and enjoy your staycation </p>
              </div>
            </div>
          </div>
          <!--row-->
          <div class="row g-4">
            <div class="col-12">
              <div class="d-flex flex-md-row gap-2 flex-column justify-content-between">
              </div>
            </div>

                      <!-- Main -->
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <!-- seusaikan dengan id -->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                 <div class="position-relative">
                    <!--img-->
                    <img src="{{ asset('IMG/double bed 3.jpg') }}" class="img-fluid w-100 rounded-4">
                    <div class="position-absolute bottom-0 left-0 p-3">
                      <!-- Option jika kamar vip -->
                      <span class="badge" style="background-color: #e0bf19;">VIP</span>
                    </div>
                  </div>
                 
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0">
                            Nama Kamar
                          </h3>
                        </div>
                      </div>
                                <!-- Bagian deskripsi -->
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>Fasilitas</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>Fasilitas</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>Fasilitas</span>
                           <div class="vr mx-2 text-gray-200"></div>
                           <span>Fasilitas</span>
                        </div>
                        
                      </div>
                      <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>

                          <span class="fw-bold text-dark">5.0</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Harga dimulai</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">Rp 500k</h4>
                          <span class="fs-6">/ malam</span>
                        </div>
                      </div>
                      <div>
                        <a href="/detailreservasi" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Lihat detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <!-- seusaikan dengan id -->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                 <div class="position-relative">
                    <!--img-->
                    <img src="{{ asset('IMG/double bed 3.jpg') }}" class="img-fluid w-100 rounded-4">
                    <div class="position-absolute bottom-0 left-0 p-3">
                      <!-- Option jika kamar vip -->
                      <span class="badge" style="background-color: #e0bf19;">VIP</span>
                    </div>
                  </div>
                 
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0">
                            Nama Kamar
                          </h3>
                        </div>
                      </div>
                                <!-- Bagian deskripsi -->
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>Fasilitas</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>Fasilitas</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>Fasilitas</span>
                           <div class="vr mx-2 text-gray-200"></div>
                           <span>Fasilitas</span>
                        </div>
                        
                      </div>
                      <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>

                          <span class="fw-bold text-dark">5.0</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Harga dimulai</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">Rp 500k</h4>
                          <span class="fs-6">/ malam</span>
                        </div>
                      </div>
                      <div>
                        <a href="/detailreservasi" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Lihat detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <!-- seusaikan dengan id -->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                 <div class="position-relative">
                    <!--img-->
                    <img src="{{ asset('IMG/double bed 3.jpg') }}" class="img-fluid w-100 rounded-4">
                    <div class="position-absolute bottom-0 left-0 p-3">
                      <!-- Option jika kamar vip -->
                      <span class="badge" style="background-color: #e0bf19;">VIP</span>
                    </div>
                  </div>
                 
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0">
                            Nama Kamar
                          </h3>
                        </div>
                      </div>
                                <!-- Bagian deskripsi -->
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>Fasilitas</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>Fasilitas</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>Fasilitas</span>
                           <div class="vr mx-2 text-gray-200"></div>
                           <span>Fasilitas</span>
                        </div>
                        
                      </div>
                      <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>

                          <span class="fw-bold text-dark">5.0</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Harga dimulai</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">Rp 500k</h4>
                          <span class="fs-6">/ malam</span>
                        </div>
                      </div>
                      <div>
                        <a href="/detailreservasi" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Lihat detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                   <!-- End kamar -->
              </div>
            </div>
          </div>
        </div>
      

        <!-- End of Main -->

    
    <!-- main -->
     <!-- Fasilitas -->
      <!-- seusaikan dengan data -->
        <div class="container pb-lg-6">
  <!-- Title -->
  <div class="row">
    <h2 class="mb-4 mx-auto text-center h1" style="color: black;">Our Facilities</h2>
  </div>

  <!-- Facilities -->
  <div class="row gy-4 justify-content-center">
    <div class="col-xxl-2 col-md-4 col-12">
      <div class="facility-card">
        <img src="{{ asset('IMG/pingpong umum.jpg') }}" alt="Fasilitas">
        <div class="facility-text">Fasilitas</div>
      </div>
    </div>

    <div class="col-xxl-2 col-md-4 col-12">
      <div class="facility-card">
        <img src="{{ asset('IMG/kolam umum.jpg') }}" alt="Fasilitas" width="80">
        <div class="facility-text">Fasilitas</div>
      </div>
    </div>

    <div class="col-xxl-2 col-md-4 col-12">
      <div class="facility-card">
        <img src="{{ asset('IMG/pingpong umum.jpg') }}" alt="Fasilitas">
        <div class="facility-text">Fasilitas</div>
      </div>
    </div>
  </div>
</div>

<!-- end main facilities -->
    
    <div class="container my-5">
    <div class="card custom-card shadow-sm">
      <div class="row g-0">
        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
          <h2>Enjoy your Room and our Facility</h2>
          <p class="mt-3 mb-1">We serve our service and with our pleasure to serving you</p>
        </div>
        <div class="col-md-6 image-container">
          <img src="{{ asset('IMG/pingpong umum.jpg') }}" alt="Properti" />
        </div>
      </div>
    </div>
  </div>
  
  <style>
    .custom-card {
      border-radius: 12px;
      overflow: hidden;
      border: 1px solid #ddd;
    }

    .custom-button {
      font-size: 0.9rem;
      color: red;
      border: 1px solid #eee;
      background-color: white;
    }

    .custom-button:hover {
      background-color: #f8f8f8;
    }

    .price-text {
      font-weight: bold;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .card-body h2 {
      font-size: 2.2rem;
      font-weight: 600;
    }
  </style>
    

    <!-- /END THE FEATURETTES -->

  </div>
  <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>



  <!-- FOOTER -->
  <!-- <footer class="container">
    <p class="float-end" style="color: black;"><a href="#">Back to top</a></p>
    <p style="color: black;">&copy; 2017–2025 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    <p style="color: black;">&copy; luxury Hotel.</p>
  </footer> -->


  <footer class="py-5 bg-dark text-secondary">
  <div class="container text-center">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-6">
        <img src="{{ asset('IMG/logo.png') }}" class="navbar-brand" href="#" width="40px" height="40px" style="filter: brightness(0) invert(1);">
        <p class="text-light">
          Stay inspired. With modern facilities, seamless service, and thoughtful amenities, we make every business trip feel effortless.
        </p>
      </div>
    </div>
    <div class="row justify-content-center mb-4">
      <div class="col-auto d-flex gap-3">
        
        <a href="#" class="text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
      </svg>
        </a>
       
        <a href="#" class="text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg>
        </a>
       
        <a href="#" class="text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>
        </a>
        
        <a href="#" class="text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg>
        </a>
      </div>
    </div>
    <div class="text-center pt-3 border-top border-secondary">
      <small class="text-secondary">© <span id="year"></span> Luxury hotel. All Rights Reserved.</small>
      <small class="text-secondary"><p class="float-end" style="color: black;"><a href="#">Back to top</a></p></small>
    </div>
  </div>
</footer>

<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>

</main>
<!-- <script defer src="../assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"></script> -->

    </body>
</html>

