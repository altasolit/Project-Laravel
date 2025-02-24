<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Reservation Page for The Luxury">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>Reservation Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="css/reservasi.css">

  <style>
    .navbar-brand img {
      margin-right: 10px;
    }

    .card-text {
      color: #6c757d;
    }

    .btn-outline-success {
      border-radius: 25px;
    }
  </style>
</head>

<body>
  <header class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="IMG/logo.png" alt="Luxury Logo" width="50" height="50">
          The Luxury
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#recomended">Recommended</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pilihan Kamar</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#Single Bed">Single Bed</a></li>
                <li><a class="dropdown-item" href="#Double Bed">Double Bed</a></li>
                <li><a class="dropdown-item" href="#Twin Single Bed">Twin Single Bed</a></li>
                <li><a class="dropdown-item" href="#Twin Double Bed">Twin Double Bed</a></li>
                <li><a class="dropdown-item" href="#VIP"><i><b><span style="color :gold"> VIP</span></b></i> Room</b></a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main class="container mt-4">
    <section class="row">
      <article class="col-md-4 mb-4">
        <img src="IMG/singgle bed.jpg" class="img-fluid rounded" alt="Single Bed">
      </article>
      <article class="col-md-8 mb-4 d-flex align-items-center">
        <div>
          <h3 class="mb-3"><b>SINGLE ROOM</b></h3>
          <p>Istirahat tenang di single room yang cozy dan lengkap dengan fasilitas terbaik. </p>
          <div class="mb-1 text-body-secondary">○ Sarapan ○ Kolam Renang</div>
          <br>
          <button type="button" class="btn btn-primary">Book Now!</button>

          <body>
            <br
              </div>
      </article>
    </section>
    <hr>
    <hr>
    <h1 class="text-center" id="recomended"><i><b>《 <span style="color :gold"> VIP</span> Recomended 》</b></i></h1>
    <hr>
    <hr>
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2" style="color:#FFB200;"><b>VIP</b></strong>
            <h3 class="mb-0">Cozy & Private</h3>
            <div class="mb-1 text-body-secondary">Kamar single dengan desain minimalis dan nyaman cocok untuk Anda yang mencari ketenangan dan privasi</div>
            <p class="card-text mb-auto"></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
              Continue reading
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="IMG/rek 1.jpg" class="bd-placeholder-img" width="250" height="250" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title></title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2" style="color:#FFB200;"><b>VIP</b></strong>
            <h3 class="mb-0"><b>Modern Simplicity</b></h3>
            <div class="mb-1 text-body-secondary">Kamar bergaya modern dengan suasana hangat dan nyaman Ideal untuk solo traveler</div>
            <p class="mb-auto"></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
              Continue reading
              <svg class="bi">
                <use xlink:href="#chevron-right" />
              </svg>
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="IMG/rek 2.jpg" class="bd-placeholder-img" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2" style="color:#FFB200;"><b>VIP</b></strong>
            <h3 class="mb-0">Twin Room</h3>
            <div class="mb-1 text-body-secondary">Luas, modern, dan elegan. Dilengkapi dengan fasilitas premium untuk kenyamanan maksimal</div>
            <p class="card-text mb-auto"></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
              Continue reading
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="IMG/rek 3.jpg" class="bd-placeholder-img" width="250" height="250" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2" style="color:#FFB200;"><b>VIP</b></strong>
            <h3 class="mb-0">Twin Room</h3>
            <div class="mb-1 text-body-secondary">Nyaman untuk dua orang, dengan desain stylish dan fasilitas lengkap</div>
            <p class="mb-auto"></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
              Continue reading
              <svg class="bi">
                <use xlink:href="#chevron-right" />
              </svg>
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="IMG/rek 4.jpg" class="bd-placeholder-img" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2" style="color:#FFB200;"><b>VIP</b></strong>
            <h3 class="mb-0">Executive Suite</h3>
            <div class="mb-1 text-body-secondary">Kemewahan dalam setiap detail. Nikmati ruang luas dengan pemandangan indah</div>
            <p class="card-text mb-auto"></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
              Continue reading
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="IMG/rek 5.jpg" class="bd-placeholder-img" width="250" height="250" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2" style="color:#FFB200;"><b>VIP</b></strong>
            <h3 class="mb-0">Luxury Suite</h3>
            <div class="mb-1 text-body-secondary">Gabungan sempurna antara kenyamanan dan kemewahan, ideal untuk pengalaman menginap eksklusif</div>
            <p class="mb-auto"></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
              Continue reading
              <svg class="bi">
                <use xlink:href="#chevron-right" />
              </svg>
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="IMG/rek 6.jpg" class="bd-placeholder-img" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
          </div>
        </div>
      </div>
    </div>
    <hr>
      <h1 class="text-center"><i><b>《 Fasilitas Umum 》</b></i></h1>
      <hr>
      <hr>
      <div class="container mt-4">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/biliard umum.jpg" class="card-img-top" alt="Billiard">
                <div class="card-body">
                    <h5 class="card-title">Billiard</h5>
                    <p class="card-text">Tempat billiard mewah dengan suasana nyaman.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/gym umum.jpg" class="card-img-top" alt="Gym">
                <div class="card-body">
                    <h5 class="card-title">Gym</h5>
                    <p class="card-text">Fasilitas gym lengkap dengan pemandangan kota.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/kolam umum.jpg" class="card-img-top" alt="Kolam Renang">
                <div class="card-body">
                    <h5 class="card-title">Kolam Renang</h5>
                    <p class="card-text">Kolam renang rooftop dengan pemandangan indah.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container mt-4">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/pingpong umum.jpg" class="card-img-top" alt="Billiard">
                <div class="card-body">
                    <h5 class="card-title">Tenis Meja</h5>
                    <p class="card-text">Tempat tenis meja mewah dengan suasana nyaman.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/meeting room umum.jpg" class="card-img-top" alt="Gym">
                <div class="card-body">
                    <h5 class="card-title">Meeting Room</h5>
                    <p class="card-text">Fasilitas meeting room mewah dan lengkap.</p>
                </div>
            </div>
        </div>

        <hr>
      <h1 class="text-center"><i><b>《 Fasilitas <span style="color :gold"> VIP</span> 》</b></i></h1>
      <hr>
      <hr>
      <div class="container mt-4">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/bowling vip.jpg" class="card-img-top" alt="Billiard">
                <div class="card-body">
                    <h5 class="card-title">Bowling</h5>
                    <p class="card-text">Strike dengan gaya di tempat bowling mewah kami! Nikmati pengalaman bermain yang nyaman dan elegan</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/poll  vip.jpg" class="card-img-top" alt="Kolam Renang">
                <div class="card-body">
                    <h5 class="card-title">Pool</h5>
                    <p class="card-text">Nikmati relaksasi di kolam renang kami Sempurnakan liburan Anda di tepi kolam</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/sauna vip.jpg" class="card-img-top" alt="Sauna">
                <div class="card-body">
                    <h5 class="card-title">Sauna</h5>
                    <p class="card-text">Rasakan ketenangan dan kenyamanan di sauna eksklusif kami. Relaksasi tingkat premium menanti</p>
                </div>
            </div>
        </div>

        <div class="container mt-4">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="IMG/spa vip.jpg" class="card-img-top" alt="Billiard">
                <div class="card-body">
                    <h5 class="card-title">Spa</h5>
                    <p class="card-text">Rasakan relaksasi total dengan perawatan spa eksklusif kami. Nikmati pijat menenangkan, aroma terapi, dan suasana damai yang menyegarkan pikiran dan tubuh.</p>
                </div>
            </div>
        </div>
    </div>
</div>


    
    </div>
    </div>
    

    
    



      <!-- Duplicate section can follow the same structure -->
  </main>

  <!-- Footer -->
  <footer class="text-center py-4 border-top">
    <p>&copy; 2025 The Luxury. All rights reserved.</p>
  </footer>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>