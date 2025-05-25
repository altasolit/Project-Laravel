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
                            <form class="row gx-3 needs-validation" novalidate="">
                                <!-- Name -->
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                                </div>
                                <!-- Username -->
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" value="{{ $user->username }}" readonly>
                                </div>
                                <!-- Email -->
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                                </div>
                                <!-- No HP -->
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label">No. HP</label>
                                    <input type="text" class="form-control" value="{{ $user->no_hp }}" readonly>
                                </div>
                                <!-- Edit Button -->
                                 <div class="d-flex gap-2">
                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                    <a href="{{ route('customer.edit', $user->id) }}" style="text-decoration: none; color: black">Update</a>
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