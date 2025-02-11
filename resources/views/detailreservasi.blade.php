<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Example · Bootstrap v5.3</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        .container {
            max-width: 900px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 8px;
        }
    </style>
</head>

<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/IMG/logo.png" alt="Logo" width="200">
        <h2><b><i>~ Reservation Form ~</i></b></h2>
    </div>
<hr>
    <div class="row">
        <!-- Gambar Single Room di Sebelah Kiri -->
        <div class="col-md-5">
            <div class="image-container">
                <img src="/IMG/singgle bed 2.jpg" alt="Single Room" class="img-fluid">
                <h5 class="mt-3 text-left"><b>Single Bed Room</b></h5>
                <p class="text-mute">Istirahat tenang di single room yang cozy dan lengkap dengan fasilitas terbaik.</p>
                <hr class="my-4">
                <h5 class=" text-left"><p>Price </p></h5>
                <p class="text-mute">Rp; 1.500.000/Malam</p>
                <h5 class=" text-left"><p>Kapasitas</p></h5>
                <p class="text-mute">1 Orang/People</p>
                <h5 class=" text-left"><p>Fasilitas</p></h5>
                <p class="text-mute">● Kolam Renang Outdoor - Lt. 1</p>
                <p class="text-mute">● Sarapan & Makan Siang - Lt. 1</p>
                </p>
            </div>
        </div>

        <!-- Form di Tengah -->
        <div class="col-md-7 form-container">
            <div class="card p-4 shadow-sm">
                <h4 class="text-center mb-3"><b><i>~ Billing Address ~</i></b></h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>

                        <div class="col-12">
                            <label for="checkIn" class="form-label">Check-in Date</label>
                            <input type="date" class="form-control" id="checkIn" required>
                        </div>

                        <div class="col-12">
                            <label for="checkOut" class="form-label">Check-out Date</label>
                            <input type="date" class="form-control" id="checkOut" required>
                        </div>

                        <h5 class="mt-3">Payment Method</h5>
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                            <label class="form-check-label" for="credit">Credit Card</label>
                        </div>
                        <div class="form-check">
                            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="debit">Debit Card</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>

                        <button class="w-100 btn btn-primary btn-lg mt-3" type="submit">Booking !</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<hr>
    <footer class="my-5 pt-5 text-center text-small">
        <p class="mb-1">&copy; 2017–2024 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>