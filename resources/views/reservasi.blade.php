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
                <img src="IMG/BarHotel.jpg" class="card-img-top" alt="Bar">
                <div class="card-body">
                    <h5 class="card-title">Bar</h5>
                    <p class="card-text">Bersantai dan Menikmati malam yang indah dengan elegan di Bar</p>
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
        <div class="container mt-4">
        <hr>
        <hr>
        <h1 class="text-center"><i><b>《 Fasilitas <span style="color :gold"> VIP</span> 》</b></i></h1>
        <hr>
        <hr>
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
    <div class="container mt-4">
      <div class="row">
      <hr>
      <hr>
      <h1 class="text-center"><i><b>《 Fasilitas Lainnya 》</b></i></h1>
      <hr>
      <hr>
      </div>
  </div>
  <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ikon Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container text-center mt-4">
    <div class="row justify-content-center">
        <!-- Cup Hot -->
        <div class="col-md-2">
    <div class="card p-3 shadow-sm border-0 text-center">
        <div class="d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cup-hot" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2 2 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5M2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175"/>
            </svg>
        </div>
        <p class="mt-2 fw-bold">Caffe</p>
    </div>
</div>


        <!-- Car Front -->
        <div class="col-md-2">
    <div class="card p-3 shadow-sm border-0 text-center">
        <div class="d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
            </svg>
        </div>
        <p class="mt-2 fw-bold">Free Parking</p>
    </div>
</div>


        <!-- Luggage -->
<div class="col-md-2">
    <div class="card p-3 shadow-sm border-0 text-center">
        <div class="d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-suitcase-fill" viewBox="0 0 16 16">
                <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V3h1.5A1.5 1.5 0 0 1 13 4.5v9a1.5 1.5 0 0 1-1.004 1.416A1 1 0 1 1 10 15H6a1 1 0 1 1-1.997-.084A1.5 1.5 0 0 1 3 13.5v-9A1.5 1.5 0 0 1 4.5 3H6zM9 1H7v2h2zM6 5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0z"/>
            </svg>
        </div>
        <p class="mt-2 fw-bold">Service Luggage</p>
    </div>
</div>

        <!-- WiFi -->
        <div class="col-md-2">
    <div class="card p-3 shadow-sm border-0 text-center">
        <div class="d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
                <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065"/>
                <path d="M9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
            </svg>
        </div>
        <p class="mt-2 fw-bold">WiFi</p>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    


      <!-- Duplicate section can follow the same structure -->
  </main>

  

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>