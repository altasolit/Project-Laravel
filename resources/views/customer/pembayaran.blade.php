@extends('navbar')

@section('navbar')
<div class="container">
    <h3>Pembayaran Reservasi</h3>
    <p>Kamar: {{ $reservation->room->tipe_kamar }}</p>
    <p>Check-in: {{ $reservation->check_in }}</p>
    <p>Check-out: {{ $reservation->check_out }}</p>
    <p>Total Harga: Rp {{ number_format($reservation->total_harga, 0, ',', '.') }}</p>

    <form action="{{ route('pembayaran.process', $reservation->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Bayar Sekarang</button>
    </form>
</div>
@endsection
