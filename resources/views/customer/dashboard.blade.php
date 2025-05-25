@extends('navbar')
@section('navbar')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Bookings</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .sidebar {
            min-height: 100vh;
            background-color: white;
            border-right: 1px solid #e0e0e0;
            box-shadow: 2px 0 4px rgba(0,0,0,0.02);
        }
        
        .sidebar-header {
            padding: 30px 25px 20px;
            border-bottom: 1px solid #e9ecef;
        }
        
        .sidebar-header h5 {
            color: #333;
            font-weight: 600;
            margin: 0;
        }
        
        .sidebar a {
            display: block;
            padding: 15px 25px;
            color: #666;
            font-weight: 500;
            text-decoration: none;
            border-left: 3px solid transparent;
            transition: all 0.15s ease;
        }
        
        .sidebar a:hover {
            background-color: #f8f9fa;
            color: #333;
            border-left-color: #ddd;
        }
        
        .sidebar a.active {
            background-color: #f0f7ff;
            color: #0d6efd;
            border-left-color: #0d6efd;
        }
        
        .main-content {
            padding: 40px;
        }
        
        .page-header {
            margin-bottom: 30px;
        }
        
        .page-header h2 {
            color: #333;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .page-header p {
            color: #666;
            margin: 0;
            font-size: 0.95rem;
        }
        
        .booking-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            border-left: 4px solidrgb(66, 74, 85);
        }
        
        .guest-name {
            color: #333;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 20px;
        }
        
        .booking-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .detail-item {
            color: #333;
            font-size: 0.95rem;
        }
        
        .detail-label {
            font-weight: 600;
            margin-right: 8px;
        }
        
        .detail-value {
            color: #666;
        }
        
        .status-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }
        
        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .status-confirmed {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeaa7;
        }
        
        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        
        .btn-sm {
            padding: 6px 12px;
            font-size: 0.875rem;
            border-radius: 6px;
            font-weight: 500;
        }
        
        .btn-outline-primary {
            border-color: #0d6efd;
            color: #0d6efd;
        }
        
        .btn-outline-primary:hover {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: white;
        }
        
        .btn-outline-secondary {
            border-color: #6c757d;
            color: #6c757d;
        }
        
        .btn-outline-secondary:hover {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
        }
        
        .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
        }
        
        .btn-outline-danger:hover {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }
        
        .empty-state h4 {
            color: #999;
            margin-bottom: 10px;
        }
        
        @media (max-width: 768px) {
            .main-content {
                padding: 20px;
            }
            
            .booking-card {
                padding: 20px;
            }
            
            .booking-details {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .status-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .action-buttons {
                width: 100%;
                justify-content: flex-start;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 p-0" style="padding: 900px;">
                <div class="main-content" style="margin: 100px;">
                    <!-- Page Header -->
                    <div class="page-header">
                        <h2>My Bookings</h2>
                        <p>Manage and track your hotel reservations</p>
                    </div>
                    
                    <!-- Booking Card 1 -->
                    <div class="booking-card">
                        <div class="guest-name">Andi</div>
                        
                        <div class="booking-details">
                            <div class="detail-item">
                                <span class="detail-label">Check-in:</span>
                                <span class="detail-value">10 Feb 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Check-out:</span>
                                <span class="detail-value">15 Feb 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Tipe Kamar:</span>
                                <span class="detail-value">Deluxe</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Jumlah Tamu:</span>
                                <span class="detail-value">2</span>
                            </div>
                        </div>
                        
                        <div class="status-section">
                            <div>
                                <span class="status-badge status-confirmed">Dikonfirmasi</span>
                            </div>
                            <div class="action-buttons">
                                <button class="btn btn-outline-primary btn-sm">View Details</button>
                                <button class="btn btn-outline-secondary btn-sm">Download</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Booking Card 2 -->
                    <div class="booking-card">
                        <div class="guest-name">Sarah</div>
                        
                        <div class="booking-details">
                            <div class="detail-item">
                                <span class="detail-label">Check-in:</span>
                                <span class="detail-value">20 Mar 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Check-out:</span>
                                <span class="detail-value">25 Mar 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Tipe Kamar:</span>
                                <span class="detail-value">Suite</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Jumlah Tamu:</span>
                                <span class="detail-value">4</span>
                            </div>
                        </div>
                        
                        <div class="status-section">
                            <div>
                                <span class="status-badge status-pending">Pending</span>
                            </div>
                            <div class="action-buttons">
                                <button class="btn btn-outline-primary btn-sm">View Details</button>
                                <button class="btn btn-outline-danger btn-sm">Cancel</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Booking Card 3 -->
                    <div class="booking-card">
                        <div class="guest-name">John</div>
                        
                        <div class="booking-details">
                            <div class="detail-item">
                                <span class="detail-label">Check-in:</span>
                                <span class="detail-value">05 Apr 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Check-out:</span>
                                <span class="detail-value">08 Apr 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Tipe Kamar:</span>
                                <span class="detail-value">Standard</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Jumlah Tamu:</span>
                                <span class="detail-value">1</span>
                            </div>
                        </div>
                        
                        <div class="status-section">
                            <div>
                                <span class="status-badge status-cancelled">Dibatalkan</span>
                            </div>
                            <div class="action-buttons">
                                <button class="btn btn-outline-secondary btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>