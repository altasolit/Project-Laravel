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

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    <link href="css/home.css" rel="stylesheet">
  </head>

  <body>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    
    </div>

    
    <header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <div class="nav-logo">
              <img src="img/logo.png" alt="Logo">
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
        </ul>
      </div>
      <style>
        /* Header dengan gradasi transparan */
.navbar {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.18)); /* Gradasi dari hitam pekat ke transparan */
    backdrop-filter: blur(300px); /* Blur latar belakang */
    /* box-shadow: 0px 4px 6px rgba(250, 250, 250, 0.35);  */
    /* border-bottom: 1px solid rgba(0, 0, 0, 0.1); Garis bawah tipis */
    transition: all 0.3s ease-in-out; /* Transisi halus */
  }
  
  /* Warna teks untuk navbar */
  .navbar .navbar-brand,
  .navbar .nav-link {
    color: rgb(255, 255, 255); /* warna teks header */
  }
  
  .navbar .navbar-brand:hover,
  .navbar .nav-link:hover {
    color:rgb(0, 0, 0); /* warna hover */
  }
  
  /* Responsivitas tombol toggler */
  .navbar-toggler {
    border-color: rgb(0, 0, 0); /* Warna garis toggler */
  }
      </style>
    </div>
  </nav>
</header>


<main>

 <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/bg-home.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
      </div>
    </div>
 </div>

 

   
 
 <!-- Bagian Tujuan Populer -->
 
 <div class="container marketing">
  <h2>Luxury Hotel</h2>
   <div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center"> 

      <!-- Tombol Panah Kiri -->
      <button id="left-arrow" class="btn btn-secondary">&lt;</button>
      
      <!-- Slider Kontainer -->
      <div id="circle-slider" class="d-flex overflow-hidden flex-nowrap" style="flex: 1;">
        <div class="d-flex" style="transition: transform 0.3s ease;">
          <!-- Tambahkan Lingkaran -->
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>1</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>2</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>3</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>4</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>5</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>6</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>7</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>8</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>9</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>10</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>11</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>12</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>13</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>14</p>
          </div>
          <div class="circle-item text-center">
            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#6c757d"></rect>
            </svg>
            <p>15</p>
          </div>
        </div>
      </div>
      
      <!-- Tombol Panah Kanan -->
      <button id="right-arrow" class="btn btn-secondary">&gt;</button>
    </div>
  </div>
</div>



    

<style>
  .circle-item {
    margin: 0 10px; /* Jarak antar lingkaran */
    min-width: 80px; /* Pastikan lebar tetap */
    text-align: center;
  }

  #circle-slider {
    overflow: hidden;
    flex: 1;
  }

  #circle-slider .d-flex {
    gap: 10px; /* Jarak antar elemen */
  }

  #left-arrow, #right-arrow {
    font-size: 10px; /* Ukuran panah lebih besar */
    width: 50px; /* Lebar tombol */
    height: 50px; /* Tinggi tombol */
    display: flex;
    justify-content: center;
    align-items: center;
    background-color:rgb(192, 192, 192); /* Warna tombol */
    border: none; /* Hilangkan border */
    border-radius: 50%; /* Membuat tombol bulat */
    color: white; /* Warna teks putih */
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
  }

  #left-arrow:hover, #right-arrow:hover {
    background-color: #495057; /* Warna tombol saat hover */
  }
  
</style>

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

<div class="container marketing">
   
<!-- bagian promo, mungkin? -->
<div class="redclub-container">
  <h2></h2>
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


    <hr class="featurette-divider">

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2025 RPL, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
