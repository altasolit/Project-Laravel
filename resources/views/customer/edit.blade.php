<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Page</title>

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
                    <li><a class="dropdown-item" href="/info">Profil</a></li>
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
            <a href="{{ route('customer.profile')}}" class="active">My Profile</a>
            <a href="{{ route('customer.dashboard')}}">My Booking</a>
        </div>

       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-bottom: 500px;">
        <h1 class="h2" style="margin-bottom: 50px; margin-top: 50px;">My Profile</h1>
    <form class="profile-form" action="{{ route('customer.update') }}" method="post" name="profile-form">
       @method('PATCH')
       @csrf
        <div class="row">
            <div class="col-md-6 mb-3" >
                <label class="form-label fw-bold">Nama</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Nama Lengkap" type="text" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Username</label>
                <input type="text" name="username" value="{{ $user->username }}" class="form-control" type="date" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control" type="date" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">No. HP</label>
                <input type="text" name="no_hp" value="{{ $user->no_hp }}" class="form-control" type="date" required>
            </div>
        </div>
            <div class="col-md-6 mb-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
    </form>
  
</main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
