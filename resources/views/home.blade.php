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
    <link href="css/home/home.css" rel="stylesheet">
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
                                    <a href="{{ url('/dashboard') }}" class="btn ">
                                        {{-- untuk profil dari database --}}
                                        {{-- <img src="{{ Auth::user()->profile_image ?? asset('default_profile.png') }}" alt="Profile" width="30" height="30" class="rounded-circle"> --}}
                                        {{-- sementara dulu --}}
                                        <img src="img/arle.jpg" alt="Profile" width="35" height="35" class="rounded-circle">
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
                <link href="css/home/header.css" rel="stylesheet">
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
                        <div class="custom-search-bar">
                            <input type="text" placeholder="Enter a City, Locality or Hotel"
                                class="custom-search-input" />
                            <div class="custom-date-input">
                                <label>Check In</label>
                                <span>y</span>
                            </div>
                            <div class="custom-date-input">
                                <label>Check Out</label>
                                <span>Thu, 23 Jan</span>
                            </div>
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

        <style>
            .circle-item {
                margin: 0 10px;
                /* Jarak antar lingkaran */
                min-width: 80px;
                /* Pastikan lebar tetap */
                text-align: center;
            }

            #circle-slider {
                overflow: hidden;
                flex: 1;
            }

            #circle-slider .d-flex {
                gap: 10px;
                /* Jarak antar elemen */
            }

            #left-arrow,
            #right-arrow {
                font-size: 10px;
                /* Ukuran panah lebih besar */
                width: 50px;
                /* Lebar tombol */
                height: 50px;
                /* Tinggi tombol */
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: rgb(192, 192, 192);
                /* Warna tombol */
                border: none;
                /* Hilangkan border */
                border-radius: 50%;
                /* Membuat tombol bulat */
                color: white;
                /* Warna teks putih */
                cursor: pointer;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                /* Tambahkan bayangan */
            }

            #left-arrow:hover,
            #right-arrow:hover {
                background-color: #495057;
                /* Warna tombol saat hover */
            }
        </style>

        <hr class="featurette-divider">
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2025 RPL, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const slider = document.querySelector("#circle-slider .d-flex");
        const leftArrow = document.getElementById("left-arrow");
        const rightArrow = document.getElementById("right-arrow");

        let currentOffset = 0;
        const scrollAmount = 100; // Geser sejauh 100px setiap kali klik

        // Tombol Panah Kanan
        rightArrow.addEventListener("click", () => {
            const maxOffset = slider.scrollWidth - slider.parentElement.clientWidth;
            currentOffset = Math.min(currentOffset + scrollAmount, maxOffset);
            slider.style.transform = `translateX(-${currentOffset}px)`;
        });

        // Tombol Panah Kiri
        leftArrow.addEventListener("click", () => {
            currentOffset = Math.max(currentOffset - scrollAmount, 0);
            slider.style.transform = `translateX(-${currentOffset}px)`;
        });
    </script>

    <link href="css/home/circle.css" rel="stylesheet">
    <script src="js/home/circle.js"></script>
    <link href="css/home/promosi.css" rel="stylesheet">
    <link href="css/home/circle.css" rel="stylesheet">
    <script src="js/home/circle.js"></script>
    <link href="css/home/circle.css" rel="stylesheet">
    <script src="js/home/circle.js"></script>
</body>

</html>
