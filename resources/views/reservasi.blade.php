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
  <div class="container mt-4" style="margin-bottom: 10px;">
  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-cup-hot" viewBox="0 0 16 16" style="margin-left: 50px;">
  <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2 2 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5M2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175"/>
  <path d="m4.4.8-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 3.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 6.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 9.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8"/>
  </svg>  
  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16" style="margin-left: 250px;">
  <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276"/>
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-luggage" viewBox="0 0 16 16" style="margin-left: 250px;">
  <path d="M2.5 1a.5.5 0 0 0-.5.5V5h-.5A1.5 1.5 0 0 0 0 6.5v7a1.5 1.5 0 0 0 1 1.415v.335a.75.75 0 0 0 1.5 0V15H4v-1H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V7h1v-.5A1.5 1.5 0 0 0 6.5 5H6V1.5a.5.5 0 0 0-.5-.5zM5 5H3V2h2z"/>
  <path d="M3 7.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0zM11 6a1.5 1.5 0 0 1 1.5 1.5V8h2A1.5 1.5 0 0 1 16 9.5v5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 14.5v-5A1.5 1.5 0 0 1 6.5 8h2v-.5A1.5 1.5 0 0 1 10 6zM9.5 7.5V8h2v-.5A.5.5 0 0 0 11 7h-1a.5.5 0 0 0-.5.5M6 9.5v5a.5.5 0 0 0 .5.5H7V9h-.5a.5.5 0 0 0-.5.5m7 5.5V9H8v6zm1.5 0a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5H14v6z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16" style="margin-left: 250px;">
  <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
  <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
  </svg>
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