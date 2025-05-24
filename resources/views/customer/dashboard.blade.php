<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Page</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .profile-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #d0021b;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .dropdown-menu {
            right: 0;
            left: auto;
        }
        .sidebar {
            min-height: 100vh;
            background-color: white;
            box-shadow: 2px 0 5px rgba(0,0,0,0.05);
        }
        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: #333;
            font-weight: 500;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #f1f1f1;
            color: #d0021b;
        }
        .card-reservation {
            border-left: 5px solid #d0021b;
            padding: 20px;
            background: white;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 8px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4 py-2">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-danger" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" height="30" class="me-2">Hotel App
        </a>
        <div class="d-flex align-items-center">
            <span class="mx-3">🇮🇩</span>
            <div class="dropdown" >
                <button class="btn" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-icon">D</div>
                </button>
                <ul class="dropdown-menu"style="left: inherit; !important">
                    <li><a class="dropdown-item" href="{{ route('customer.profile')}}">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Pengaturan Akun</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item text-danger fw-bold" type="submit">Keluar</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Layout -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 p-0 sidebar">
            <a href="{{ route('customer.profile')}}" >My Profile</a>
            <a href="{{ route('customer.dashboard')}}" class="active">My Booking</a>
        </div>

      <!-- Main -->
        <main class="col-md-9 col-lg-10 p-4">
            <h2 class="mb-4">My Bookings</h2>

            <!-- Booking Cards -->
            <div class="card-reservation">
                <h5 class="fw-bold">Andi</h5>
                <p><strong>Check-in:</strong> 10 Feb 2025</p>
                <p><strong>Check-out:</strong> 15 Feb 2025</p>
                <p><strong>Tipe Kamar:</strong> Deluxe</p>
                <p><strong>Jumlah Tamu:</strong> 2</p>
                <p><strong>Status:</strong> <span class="text-success fw-bold">Dikonfirmasi</span></p>
            </div>

            <!-- Tambah reservasi lain jika ada -->
        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
