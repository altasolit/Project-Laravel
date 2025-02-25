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
                        <div class="container-bar">
                            @if (Route::has('login'))
                                <nav
                                    class="d-flex justify-content-end"style="width: {{ Request::is('dashboard') ? '110px' : '165px' }};">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark me-2">
                                            Dashboard
                                        </a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">
                                            Log in
                                        </a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-outline-dark">
                                                Register
                                            </a>
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
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bg-home.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    <div class="custom-search-bar-container">
                    <div class="b-search-bar">
                        <input type="text" id="destination" class="b-input" placeholder="Where are you going?" />  
                    <div class="b-text">
                        <label>Test</label>
                        <input type="text" class="b-input b-checkin-date" placeholder="Check-in date" />
                    </div>    
                    <div class="b-text">
                        <label>Test</label>
                        <input type="text" class="b-input b-checkout-date" placeholder="Check-out date" />
                    </div>    
        <button id="search-btn" class="b-button">Search</button>
    </div>
</div>

<!-- Tambahkan Flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="search.js"></script>

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
            <div class="redclub-container">
                <div class="redclub-card">
                    <div class="redclub-content">
                        <img src="redclub-logo.png" alt="Logo Hotel" class="redclub-logo">
                        <p>Makin banyak menginap, makin hemat dengan Luxury Club terbaru</p>
                    </div>
                    <div class="redclub-benefits">
                        <div class="benefit-item">
                            <img src="icon-discount.png" alt="Diskon" class="benefit-icon">
                            <p>Diskon Ekstra 12%</p>
                        </div>
                        <div class="benefit-item">
                            <img src="icon-points.png" alt="Poin" class="benefit-icon">
                            <p>Dapatkan poin 3x lipat</p>
                        </div>
                        <div class="benefit-item">
                            <img src="icon-redeem.png" alt="Tukar Poin" class="benefit-icon">
                            <p>Bisa tukar poin dengan diskon</p>
                        </div>
                        <div class="benefit-item">
                            <img src="icon-support.png" alt="Bantuan" class="benefit-icon">
                            <p>Layanan bantuan prioritas</p>
                        </div>
                        <div class="benefit-item">
                            <img src="icon-price.png" alt="Harga Terbaik" class="benefit-icon">
                            <p>Jaminan Harga Terbaik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="penawaran-section">
    <div class="penawaran-header">
      <h2>Penawaran</h2>
      <a href="#" class="lihat-semua">Lihat semua</a>
    </div>
    
    <div class="penawaran-cards">
      <!-- Kartu 1 -->
      <div class="penawaran-card">
        <img src="img/lobby.jpg" alt="Banner 1"/>
        <div class="card-content">
          <h3>Saatnya Mengikuti #RedDoorzChallenge</h3>
        </div>
      </div>
      
      <!-- Kartu 2 -->
      <div class="penawaran-card">
        <img 
          src="https://via.placeholder.com/300x150/FFD700/000000?text=Banner+2" 
          alt="Banner 2"
        />
        <div class="card-content">
          <h3>Looong Weekend</h3>
          <p>Nikmati liburan lebih seru bersama RedDoorz!</p>
        </div>
      </div>
      
      <!-- Kartu 3 -->
      <div class="penawaran-card">
        <img 
          src="https://via.placeholder.com/300x150/FF0000/FFFFFF?text=Banner+3" 
          alt="Banner 3"
        />
        <div class="card-content">
          <h3>RedClub</h3>
          <p>Dapatkan poin 2x lipat untuk setiap pemesanan!</p>
        </div>
      </div>
    </div>
  </section>
       
        <hr class="featurette-divider">
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2025 RPL, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
