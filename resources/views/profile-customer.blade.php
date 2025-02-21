<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title> Profile Page </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="css/profile/body.css" rel="stylesheet">
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
                <a href="#" class="dropdown-item">Profil</a>
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
                            <h3>My Booking</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bagian Profile -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-bottom: 500px;">
        <h1 class="h2" style="margin-bottom: 50px; margin-top: 50px;">My Profile</h1>
        <p>nullemail@gmail.com</p>
    <form class="profile-form" action="" name="profile-form">
        <div class="row">

            <div class="col-md-6 mb-3" >
                <label for="name" class="form-label" >Nama</label>
                <input id="name" class="form-control" placeholder="Nama Lengkap" type="text" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="dob" class="form-label">Tanggal lahir</label>
                <input id="dob" class="form-control" type="date" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="gender" class="form-label">Jenis kelamin</label>
                <select id="gender" class="form-select" required>
                    <option selected disabled>Pilih jenis kelamin</option>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuans</option>
                </select>
            </div>

           
            <div class="col-md-6 mb-3">
                <label for="marital-status" class="form-label">Status Pernikahan</label>
                <select id="marital-status" class="form-select" required>
                    <option selected disabled>Pilih Status Pernikahan</option>
                    <option value="single">Belum Menikah</option>
                    <option value="married">Menikah</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="hometown" class="form-label">Kampung Halaman</label>
                <input id="hometown" class="form-control" placeholder="Masukkan kampung halaman Anda" type="text" required>
            </div>

            
            <div class="col-md-6 mb-3">
                <label for="current-city" class="form-label">Kota Sekarang</label>
                <input id="current-city" class="form-control" placeholder="Masukkan kota sekarang" type="text" required>
            </div>
        </div>
            <div class="col-md-6 mb-3">
                
            </div>

    </form>
</main>

<!-- CSS Form  -->
<style>
   
    .profile-header {
        padding: 20px 0;
        border-bottom: 2px solid #eee;
        margin-bottom: 20px;
    }
    
    .form-label {
        font-weight: bold;
        color: #333;
    }

    
    .form-control,
    .form-select {
        border-radius: 8px;
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 16px;
        transition: 0.3s;
    }

    
    .form-control:focus,
    .form-select:focus {
        border-color: #d0021b;
        box-shadow: 0 0 5px rgba(208, 2, 27, 0.5);
    }

    
    .error-message {
        color: #d0021b;
        font-size: 14px;
        margin-top: 5px;
    }

    /* Styling untuk Tombol Simpan */
    .btn-save {
        background-color: #d0021b;
        color: white;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 8px;
        border: none;
        transition: 0.3s;
    }

    .btn-save:hover {
        background-color: #a00015;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .row {
            flex-direction: column;
        }

        .col-md-6 {
            width: 100%;
        }
    }
</style>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
