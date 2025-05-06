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


        <hr class="featurette-divider">
        <!-- bagian lokasi -->
        <div class="container-a">
            <h3 class="location-title">Location</h3>
            <h2 class="address">RPL 1, SMKN 1 KOTA CIREBON</h2>
            <button class="map-button">FIND US ON MAP</button>
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
