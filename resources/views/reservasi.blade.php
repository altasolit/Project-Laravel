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
                <a class="nav-link active" href="#">Recommended</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pilihan Kamar</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Single Bed</a></li>
                  <li><a class="dropdown-item" href="#">Double Bed</a></li>
                  <li><a class="dropdown-item" href="#">Twin Single Bed</a></li>
                  <li><a class="dropdown-item" href="#">Twin Double Bed</a></li>
                  <li><a class="dropdown-item" href="#">VIP Room</a></li>
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
            <h3 class="mb-3">Single Room</h3>
<body>
  <!-- <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Check In</span>
  <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Check Out</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
</div> -->
            <a href="#" class="btn btn-primary">Book Now!</a>
          </div>
        </article>
      </section>

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