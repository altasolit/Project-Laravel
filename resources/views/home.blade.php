<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title> Home Page </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home/bawaan.css" rel="stylesheet">
    <link href="css/home/header.css" rel="stylesheet">
    <link href="css/home/search.css" rel="stylesheet">
    <script src="js/home/search.js"></script>
    <link href="css/home/circle.css" rel="stylesheet">
    <script src="js/home/circle.js"></script>
    <link href="css/home/home.css" rel="stylesheet">
    <link href="css/home/fasilitas.css" rel="stylesheet">
    <link href="css/home/blog.css" rel="stylesheet">
    <link href="css/home/styles.css" rel="stylesheet">
    <link href="css/home/footer.css" rel="stylesheet">
    <link href="css/home/gallery.css" rel="stylesheet">
</head>

<body>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle"></div>
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <div class="nav-logo">
                                <img src="img/logo2.png" alt="Logo">
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        {{-- <div class="container-bar">
                            @if (Route::has('login'))
                                <nav class="d-flex justify-content-end" style="width: {{ Request::is('dashboard') ? '110px' : '165px' }};">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="btn">
                                            <img src="img/arle.jpg" alt="Profile" width="35" height="35" class="rounded-circle">
                                        </a>
                        
                                        @if(Auth::user()->isAdmin())
                                            <a href="{{ route('dashboard') }}" class="btn btn-primary">Admin Panel</a>
                                        @elseif(Auth::user()->isCustomer())
                                            <a href="{{ route('info') }}" class="btn btn-secondary">My Reservations</a>
                                        @endif
                        
                                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Logout</button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Log in</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-outline-dark">Register</a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </div>        --}}
                        <div class="container-bar">
                            @if (Route::has('login'))
                                <nav class="d-flex justify-content-end" style="width: {{ Request::is('dashboard') ? '110px' : '165px' }};">
                                    @auth
                                        <!-- Jika user sudah login -->
                                        <a href="{{ Auth::user()->isAdmin() ? route('admin.dashboard') : route('customer.dashboard') }}" class="btn">
                                            <img src="{{ asset('img/arle.jpg') }}" alt="Profile" width="35" height="35" class="rounded-circle">
                                        </a>
                        
                                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Logout</button>
                                        </form>
                                    @else
                                        <!-- Jika user belum login -->
                                        <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Log in</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-outline-dark">Register</a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"> -->
                    <img src="img/bg-home.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    <div class="custom-search-bar-container">
                        <div class="custom-search-bar">
                            <div class="custom-guest-input">
                                <input type="text" placeholder="Enter a City, Locality or Hotel"
                                    class="custom-search-input" />
                            </div>
                            <div class="divider"></div>
                            <div class="custom-guest-input">
                                <label>Check-in</label>
                                <input type="text" class=" b-checkin-date" placeholder="Check-in date" />
                            </div>
                            <div class="divider"></div>
                            <div class="custom-guest-input">
                                <label>Check-out</label>
                                <input type="text" class=" b-checkout-date" placeholder="Check-out date" />
                            </div>
                            <div class="divider"></div>
                            <div class="custom-guest-input">
                                <label>Rooms</label>
                                <span>1 Room, 2 Guest</span>
                            </div>
                            <button class="custom-search-button">
                                <span>&#128269; Cari</span>
                            </button>
                        </div>
                    </div>
                    <link href="css/home/search.css">
                    <script src="js/home/search.js"></script>
                </div>
            </div>
        </div>
        <div class="container marketing">
            <div class="margin-right mb-4">
                <h3>Tujuan Populer</h3>
            </div>
            <div class="horizontal-scroll">
                <div class="container-slider">
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                    <div class="circle-item text-center">
                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#6c757d"></rect>
                        </svg>
                        <p>1</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="container marketing">
            <div class=" mb-4">
                <h3>Luxury Hotel</h3>
            </div>
            <link href="css/home/fasilitas.css" rel="stylesheet">
            <div class="redclub-container">
                <div class="redclub-card">
                    <div class="redclub-content">
                        <img src="img/logo2.png" alt="Logo Hotel" class="redclub-logo">
                        <p>Jadilah VIP member The Luxury dan dapatkan promo di setiap kamar yang dipesan, akses
                            fasilitas premium dan nikmati kenyamanannya</p>
                    </div>
                    <div class="redclub-benefits">
                        <div class="benefit-item">
                            <img src="img/bg-wifi.png" alt="Diskon" class="benefit-icon">
                            <p style="filter: invert(1) brightness(2);">Free WIFI</p>
                        </div>
                        <div class="benefit-item">
                            <img src="img/bg-clean.png" alt="Poin" class="benefit-icon">
                            <p style="filter: invert(1) brightness(2);">Cleaning Service</p>
                        </div>
                        <div class="benefit-item">
                            <img src="img/bg-car.png" alt="Tukar Poin" class="benefit-icon">
                            <p style="filter: invert(1) brightness(2);">Layanan antar jemput bandara</p>
                        </div>
                        <div class="benefit-item">
                            <img src="img/bg-team.png" alt="Bantuan" class="benefit-icon">
                            <p style="filter: invert(1) brightness(2);">Meeting room</p>
                        </div>
                        <div class="benefit-item">
                            <img src="img/bg-laundry.png" alt="Harga Terbaik" class="benefit-icon">
                            <p style="filter: invert(1) brightness(2);">Laundry</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .benefit-item {
                filter: invert(1) brightness(2);
            }

        </style>

        <section class="penawaran-section">

            <div class="penawaran-header">
                <h2>Penawaran</h2>
            </div>

            <div class="penawaran-cards">
                <!-- Kartu 1 -->
                <div class="penawaran-card">
                    <img src="img/lobby.jpg" alt="Banner 1" />
                    <div class="card-content">
                        <h3>Saatnya Mengikuti #RedDoorzChallenge</h3>
                    </div>
                </div>

                <!-- Kartu 2 -->
                <div class="penawaran-card">
                    <img src="https://via.placeholder.com/300x150/FFD700/000000?text=Banner+2" alt="Banner 2" />
                    <div class="card-content">
                        <h3>Looong Weekend</h3>
                        <p>Nikmati liburan lebih seru bersama RedDoorz!</p>
                    </div>
                </div>

                <!-- Kartu 3 -->
                <div class="penawaran-card">
                    <img src="https://via.placeholder.com/300x150/FF0000/FFFFFF?text=Banner+3" alt="Banner 3" />
                    <div class="card-content">
                        <h3>RedClub</h3>
                        <p>Dapatkan poin 2x lipat untuk setiap pemesanan!</p>
                    </div>

    <div class="penawaran-header">
      <h2>Penawaran</h2>
    </div>
    
    <div class="penawaran-cards">
      <!-- Kartu 1 -->
      <div class="penawaran-card">
        <img src="IMG/biliard umum.jpg" alt="Banner 1" style="height: 300px; object-fit: cover; width: 100%;"/>
        <div class="card-content">
         <h3>Billiard</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat in nisi illo laudantium magnam?
             Doloremque, tenetur libero voluptatem veniam enim ad eos illum facilis natus? A cupiditate enim cumque optio.</p>
        </div>
      </div>
      
      <!-- Kartu 2 -->
      <div class="penawaran-card">
      <img src="IMG/kolam umum.jpg" alt="Banner 1" style="height: 300px; object-fit: cover; width: 100%;"/>
        <div class="card-content">
          <h3>Swimming pool</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident praesentium accusantium, accusamus sed, sequi 
            numquam libero inventore iste amet illo minus ratione beatae blanditiis labore nesciunt quo! Excepturi, deserunt a!</p>
        </div>
      </div>
      
      <!-- Kartu 3 -->
      <div class="penawaran-card">
      <img src="IMG/BarHotel.jpg" alt="Banner 1" style="height: 300px; object-fit: cover; width: 100%;"/>
        <div class="card-content">
         <h3>Bar</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta fuga hic aspernatur ullam modi 
            facere rem. Earum ea numquam pariatur recusandae, nostrum saepe, labore temporibus corporis id perferendis expedita!</p>
        </div>
      </div>
    </div>
  </section>

  <section class="intro" style="margin-top: 50px;">
        <h2>Giving the best just for you</h2>
        <div class="tags">
            <span>WIFI</span>
            <span>Cleaning Service</span>
            <span>Layanan Antar Jemput Bandara</span>
            <span>Meeting Room</span>
            <span>Laundry</span>
        </div>

        <!-- Carousel -->
        <div class="container mt-5"> <!-- Menambah margin-top lebih besar -->
    <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide Pertama -->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <span class="badge">Info</span>
                            <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Blog 1">
                            <div class="card-body">
                                <h6 class="card-title">Kultum Ramadhan: Inspirasi dan Renungan...</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <span class="badge">Info</span>
                            <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Blog 2">
                            <div class="card-body">
                                <h6 class="card-title">Jangan Risau, Ini Dia Cara Menahan Lapar...</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <span class="badge">Singapore</span>
                            <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Blog 3">
                            <div class="card-body">
                                <h6 class="card-title">15 Makanan Khas Probolinggo yang Tidak...</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <span class="badge">Feature</span>
                            <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Blog 4">
                            <div class="card-body">
                                <h6 class="card-title">Staycation Ramadhan: Pilihan Nyaman...</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Kedua -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <span class="badge">Travel</span>
                            <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Blog 5">
                            <div class="card-body">
                                <h6 class="card-title">Destinasi Liburan yang Cocok Saat Ramadhan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <span class="badge">Tips</span>
                            <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Blog 6">
                            <div class="card-body">
                                <h6 class="card-title">Tips Hemat Saat Traveling di Bulan Puasa</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <span class="badge">Food</span>
                            <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Blog 7">
                            <div class="card-body">
                                <h6 class="card-title">Kuliner Halal di Singapura yang Harus Dicoba</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <span class="badge">Lifestyle</span>
                            <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Blog 8">
                            <div class="card-body">
                                <h6 class="card-title">Rutinitas Sehat Selama Bulan Ramadhan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Tombol Navigasi Carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>

    </div>
</div>          

<style>
    .container {
        margin-top: 70px; /* Menurunkan posisi carousel */
    }
    .carousel-item {
        padding: 10px;
        transition: transform 0.5s ease-in-out;
    }
    .card {
        border: none;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    .carousel-control-prev, .carousel-control-next {
        width: auto;
    }
    .badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new bootstrap.Carousel(document.querySelector('#blogCarousel'), {
            interval: 5000, // Slide berganti setiap 5 detik
            ride: "carousel"
        });
    });
</script>


    </section>


    <section class="gallery" style="bottom: 400px;">
    <div class="gallery-container">
        <h2 class="gallery-heading">Explore Our Room Designs</h2>
        <p class="gallery-description">Explore finished kitchens from some of our customers and see how they created their dream kitchen while getting ideas for your own.</p>
        <div class="gallery-room">
            <div class="gallery-item">
                <img src="img/rek 1.jpg" alt="Cozy And Private">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">Cozy And Private</div>

                </div>
            </div>
        </section>

        <!-- bagian ??? -->
        <section class="intro">
            <h2>Giving the best just for you</h2>
            <div class="tags">
                <span>WIFI</span>
                <span>Cleaning Service</span>
                <span>Layanan Antar Jemput Bandara</span>
                <span>Meeting Room</span>
                <span>Laundry</span>
            </div>
            <div class="feature">
                <img src="img/bg-home.jpg" alt="Restaurant">
                <div class="feature-text">
                    <h3>Lihatlah</h3>
                    <p>Enjoy fine dining with a selection of international and local cuisines.</p>
                </div>
            </div>
        </section>

        <div class="gallery-container">
            <h2 class="gallery-heading">Explore Our Room Designs</h2>
            <p class="gallery-description">Explore finished kitchens from some of our customers and see how they
                created their dream kitchen while getting ideas for your own.</p>
            <div class="gallery-room">
                <div class="gallery-item">
                    <img src="img/rek 1.jpg" alt="Cozy And Private">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-text">Cozy And Private</div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="img/rek 2.jpg" alt="Modern Simplicity">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-text">Modern Simplicity</div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="img/gallery 3.jpg" alt="Twin Room">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-text">Twin Room</div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="img/gallery 4.jpg" alt="Twin Room">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-text">Twin Room</div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="img/gallery 5.jpg" alt="Executive Suite">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-text">Executive Suite</div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="img/rek 6.jpg" alt="Luxury Suite">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-text">Luxury Suite</div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>
    <hr class="featurette-divider">
    </section>
    
  
       
       
          <!-- bagian lokasi -->
    <div class="container-a">
        <h3 class="location-title">Location</h3>
        <h2 class="address">RPL 1, SMKN 1 KOTA CIREBON</h2>
        <button class="map-button">FIND US ON MAP</button>
=======



        <hr class="featurette-divider">
        <!-- bagian lokasi -->
        <div class="container-a">
            <h3 class="location-title">Location</h3>
            <h2 class="address">RPL 1, SMKN 1 KOTA CIREBON</h2>
            <button class="map-button">FIND US ON MAP</button>
>>>>>>> e13552b4cdf64ac4e3044e8baad15984a853e5fb

            <div class="contact-info">
                <div class="info-box">
                    <img src="call-icon.png" alt="Call Icon" class="icon">
                    <h3>Make a Call</h3>
                    <p>Hubungi kami untuk pertanyaan umum anda.</p>
                    <p class="contact-detail">815-641-5000</p>
                </div>

                <div class="info-box">
                    <img src="mail-icon.png" alt="Mail Icon" class="icon">
                    <h3>Send a Mail</h3>
                    <p>Kirimkan email anda untuk pertanyaan atau saran.</p>
                    <p class="contact-detail">info@example.com</p>
                </div>

                <div class="info-box">
                    <img src="toll-free-icon.png" alt="Toll Free Icon" class="icon">
                    <h3>Toll Free</h3>
                    <p>Nomor bebas pulsa untuk tamu yang menginap.</p>
                    <p class="contact-detail">1800-641-1234</p>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2025 RPL, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tambahkan Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/search.js') }}"></script>

</body>

</html>
