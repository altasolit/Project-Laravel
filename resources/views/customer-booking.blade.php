<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title> Profile Page </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="css/profile/body.css" rel="stylesheet">
    <link href="css/booking.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="Logo">
        </a>

        <!-- Bahasa dan Menu -->
        <div class="d-flex align-items-center">
            <!-- Tombol Bahasa -->
            <button class="btn btn-light mx-2">🇮🇩</button>

            

        <!-- Dropdown Profil -->
        <div class="dropdown">
            <button class="profile-btn" id="profileDropdown">
            <div class="profile-icon ms-3">D</div>
            </button>
            <div class="dropdown-menu" id="profileMenu">
                <a href="/info" class="dropdown-item">Profil</a>
                <a href="#" class="dropdown-item">Pengaturan Akun</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item logout">Keluar</a>
            </div>
        </div>
<style>
   
    .profile-btn {
        background: none;
        border: none;
        cursor: pointer;
        position: relative;
    }
    .profile-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid #ccc;
        transition: 0.3s;
    }

    .profile-img:hover {
        border-color: #d0021b;
    }

    /* Dropdown Menu */
    .dropdown-menu {
        position: absolute;
        right: 0;
        top: 50px;
        background: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        display: none;
        min-width: 180px;
        z-index: 1000;
    }

    .dropdown-item {
        padding: 10px 15px;
        text-decoration: none;
        display: block;
        color: #333;
        font-size: 14px;
        transition: 0.3s;
    }

    .dropdown-item:hover {
        background: #f5f5f5;
    }

    .dropdown-divider {
        height: 1px;
        background: #ddd;
        margin: 5px 0;
    }

    /* Warna khusus untuk tombol Keluar */
    .logout {
        color: #d0021b;
        font-weight: bold;
    }

    .logout:hover {
        background: rgba(208, 2, 27, 0.1);
    }
</style>

<!-- JavaScript untuk Toggle Dropdown -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const profileBtn = document.getElementById("profileDropdown");
        const profileMenu = document.getElementById("profileMenu");

        profileBtn.addEventListener("click", function(event) {
            event.stopPropagation();
            profileMenu.style.display = profileMenu.style.display === "block" ? "none" : "block";
        });

        // Tutup dropdown saat klik di luar
        document.addEventListener("click", function(event) {
            if (!profileBtn.contains(event.target) && !profileMenu.contains(event.target)) {
                profileMenu.style.display = "none";
            }
        });
    });
</script>

            </div>
        </div>
    </div>
</nav>

<style>
    .navbar {
            background-color: white;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #d0021b;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }
        .profile-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
</style>




</div>
  </nav>
<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        <div class="sidebar col-md-3 col-lg-2 p-0">
            <div class="flex-shrink-0 p-3 sidebar" style="width: 280px;">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="/info" class="link-body-emphasis d-inline-flex text-decoration-none rounded " style="margin-bottom: 25px; margin-top: 50px;">
                            <h3>My Profile</h3>
                        </a>
                    </li>
                    <li>
                        <a href="/bookings" class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                            <h3>My Booking </h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Booking</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>

      <div class="container">
        <div id="reservations">
            <div class="reservation" data-status="confirmed">
                <strong>Nama:</strong> Andi<br>
                <strong>Check-in:</strong> 10 Feb 2025<br>
                <strong>Check-out:</strong> 15 Feb 2025<br>
                <strong>Tipe Kamar:</strong> Deluxe<br>
                <strong>Jumlah Tamu:</strong> 2<br>
                <strong>Status:</strong> Dikonfirmasi
            </div>
                </div>

    <style>
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .label-filter{
            text-align: center;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .reservation {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .reservation:last-child {
            border-bottom: none;
        }
    </style>

<script>
        function filterReservations() {
            var filterValue = document.getElementById("filter").value;
            var reservations = document.querySelectorAll(".reservation");
            
            reservations.forEach(function(reservation) {
                if (filterValue === "all" || reservation.getAttribute("data-status") === filterValue) {
                    reservation.style.display = "block";
                } else {
                    reservation.style.display = "none";
                }
            });
        }
    </script>

      </div>
    </main>
    <script src="js/booking.js"></script>
    