
<!doctype html>
<html lang="en" data-bs-theme="auto">
<<<<<<< HEAD

=======
>>>>>>> a585e8d6b6d2d5271efa4a04eb48bccc25a97220
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail.reservasi</title>

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
@extends('navbar')

@section('navbar')

<body class="bg-light">
<div class="container">
<hr>
<div class="container py-5">
  <div class="row">
    <div class="col-lg-8"> 
      <div class="text-block">
        <h1>{{ $room->tipe_kamar }}</h1>

        <p class="text-muted fw-light">{{ $room->deskripsi }}</p>

        <p class="text-muted fw-light">Fasilitas Lainnya Di Dalam Kamar:</p>
        <ul class="text-muted fw-light">
          <li>TV dengan akses Netflix dan DirectTVNow</li>
          <li>Free WiFi</li>
          <li>Perlengkapan untuk membuat kopi/teh gourmet</li>
          <li>Seprai dan handuk bersih</li>
          <li>Pemanggang roti, microwave, panci dan wajan, serta kebutuhan memasak dasar seperti garam, merica, gula, dan minyak zaitun</li>
          <li>AC untuk menjaga kenyamanan Anda selama musim panas</li>
        </ul>

        <h6 class="mb-3">Interaksi dengan tamu</h6>
        <p class="text-muted fw-light">Kami tinggal di dua lantai di atas apartemen taman, jadi kami biasanya tersedia untuk menjawab pertanyaan Anda...</p>
      </div>

      <div class="text-block">
        <h4 class="mb-4">Fasilitas Hotel</h4>
        <div class="row"> 
          <div class="col-md-6">
            <ul class="list-unstyled text-muted">
              @foreach($room->fasilitas->slice(0, 4) as $f)
                <li class="mb-2">
                  <i class="fa fa-check text-secondary me-2"></i>{{ $f->nama }}
                </li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled text-muted">
              @foreach($room->fasilitas->slice(4) as $f)
                <li class="mb-2">
                  <i class="fa fa-check text-secondary me-2"></i>{{ $f->nama }}
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="p-4 shadow ms-lg-4 rounded sticky-top" style="top: 100px;">
        <p class="text-muted">
          <span class="text-primary h2">Rp {{ number_format($room->harga, 0, ',', '.') }}</span>
          <small class="text-muted">/ malam</small>
        </p>
      </div>
    </div>
  </div>
</div>

            <hr class="my-4">
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

              <div class="d-grid mb-4">
                <button class="btn btn-primary" type="submit">Booking</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>







       

      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
