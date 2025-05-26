<!-- 
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-bottom: 500px;">
                <h1 class="h2" style="margin-bottom: 50px; margin-top: 50px;">My Profile</h1>
                <form class="profile-form" action="{{ route('customer.update') }}" method="post" name="profile-form">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Nama</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                placeholder="Nama Lengkap" type="text" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Username</label>
                            <input type="text" name="username" value="{{ $user->username }}" class="form-control"
                                type="date" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                                type="date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">No. HP</label>
                            <input type="text" name="no_hp" value="{{ $user->no_hp }}" class="form-control"
                                type="date" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </main> -->
           @extends('navbar')
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Page</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .avatar-xl {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
        
        .card {
            border: 1px solid #e9ecef;
        }
        
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }
        
        body {
            background-color: #f8f9fa;
        }
        
        .form-control[readonly] {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Profile Card -->
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="card rounded-4 shadow-sm">
                    <div class="card-header p-4">
                        <h3 class="mb-2">Profile Details</h3>
                        <p class="mb-0 text-muted">You have full control to manage your own account setting.</p>
                    </div>
                    <div class="card-body p-4">
                        <!-- Avatar Section -->
                        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between mb-4">
                            <div class="d-flex align-items-center mb-3 mb-lg-0">
                                <img src="{{ asset('IMG/home/logo.png') }}" class="avatar-xl rounded-circle me-3" alt="avatar">
                                <div>
                                    <h5 class="mb-1">{{ $user->name }}</h5>
                                    <p class="mb-0 text-muted small">{{ $user->email }}</p>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- Personal Details Section -->
                        <div>
                            <h4 class="mb-0">Personal Details</h4>
                            <p class="mb-4">Edit your personal information and address.</p>

                            <!-- @if (isset($user)) -->
                           <form action="{{ route('customer.update') }}" method="POST" name="profile-form">
                    @method('PATCH')
                    @csrf
                    
                    <div class="row">
                        <!-- Nama -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" value="{{ $user->name ?? 'dapinaaaa' }}" class="form-control" required>
                            </div>
                        </div>
                        
                        <!-- Username -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" value="{{ $user->username ?? 'hawloww' }}" class="form-control" required>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="{{ $user->email ?? 'callystavin@gmail.com' }}" class="form-control" required>
                            </div>
                        </div>
                        
                        <!-- No HP -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">No. HP</label>
                                <input type="text" name="no_hp" value="{{ $user->no_hp ?? '093472342364' }}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tombol Simpan -->
                    <div class="mt-3">
                        <button type="submit" class="btn-save btn-outline-secondary btn-sm">
                            simpan
                        </button>
                    </div>
                </form>
                               
                            <!-- @else -->
                                <!-- <div class="alert alert-warning">Data user tidak tersedia.</div> -->
                            <!-- @endif -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>