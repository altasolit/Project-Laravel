@extends('layouts.app')
@section('title', 'Luxury Hotel | Detail Reservasi')

@php
    use Carbon\Carbon;
    $checkIn = Carbon::parse($reservasi->tanggal_check_in);
    $checkOut = Carbon::parse($reservasi->tanggal_check_out);
    $durasi = $checkIn->diffInDays($checkOut);
@endphp

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="page-header mb-3">
            <div class="row">
                <div class="col">
                    <h4 class="mb-0">Detail Reservasi</h4>
                </div>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Data Reservasi</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nama Customer:</strong>
                        <p>{{ $reservasi->nama_customer }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Nomor Kamar:</strong>
                        <p>{{ $reservasi->dataKamar->nomor_kamar }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Tanggal Check-in:</strong>
                        <p>{{ $checkIn->translatedFormat('d F Y') }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Tanggal Check-out:</strong>
                        <p>{{ $checkOut->translatedFormat('d F Y') }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Jumlah Tamu:</strong>
                        <p>{{ $reservasi->jumlah_tamu }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Tipe Kamar:</strong>
                        <p>{{ $reservasi->dataKamar->tipe_kamar }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Metode Pembayaran:</strong>
                        <p>{{ $reservasi->metode_pembayaran }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Harga per Malam:</strong>
                        <p>Rp {{ number_format($reservasi->harga, 0, ',', '.') }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Durasi Menginap:</strong>
                        <p>{{ $durasi }} malam</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Total Harga:</strong>
                        <p>Rp {{ number_format($reservasi->total_harga, 0, ',', '.') }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Status Pembayaran:</strong>
                        <p>{{ $reservasi->status_pembayaran }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Status Pemesanan:</strong>
                        <p>{{ $reservasi->status_pemesanan }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nomor Rekening:</strong>
                        <p>{{ $reservasi->no_rekening }}</p>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('admin.data-reservasi.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
