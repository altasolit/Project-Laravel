@extends('layouts.app')
@section('title', 'Luxury Hotel | Detail Histori Reservasi Saya')

@php
    use Carbon\Carbon;
    $checkIn = Carbon::parse($histori->tanggal_check_in);
    $checkOut = Carbon::parse($histori->tanggal_check_out);
    $durasi = $checkIn->diffInDays($checkOut);
    $hargaPerMalam = $histori->dataKamar->harga_per_malam ?? 0;
    $totalHarga = $durasi > 0 ? $hargaPerMalam * $durasi : $hargaPerMalam;
@endphp

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Detail Histori Reservasi</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Reservasi Saya</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Nama:</h5>
                            <p>{{ $histori->nama_customer }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Nomor Kamar:</h5>
                            <p>{{ $histori->dataKamar->nomor_kamar ?? 'Kamar tidak tersedia' }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Tanggal Check-in:</h5>
                            <p>{{ $checkIn->translatedFormat('d F Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Tanggal Check-out:</h5>
                            <p>{{ $checkOut->translatedFormat('d F Y') }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Jumlah Tamu:</h5>
                            <p>{{ $histori->jumlah_tamu }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Tipe Kamar:</h5>
                            <p>{{ $histori->dataKamar->tipe_kamar ?? 'Tipe tidak diketahui' }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Metode Pembayaran:</h5>
                            <p>{{ $histori->metode_pembayaran }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Harga per Malam:</h5>
                            <p>Rp {{ number_format($histori->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Durasi Menginap:</h5>
                            <p>{{ $durasi }} malam</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Total Harga:</h5>
                            <p>Rp {{ number_format($histori->total_harga, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Status Pembayaran:</h5>
                            <p>
                                <span class="badge badge-{{ $histori->status_pembayaran == 'Lunas' ? 'success' : 'warning' }}">
                                    {{ $histori->status_pembayaran }}
                                </span>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5>Status Pemesanan:</h5>
                            <p>
                                <span class="badge badge-{{ $histori->status_pemesanan == 'Selesai' ? 'success' : ($histori->status_pemesanan == 'Dibatalkan' ? 'danger' : 'info') }}">
                                    {{ $histori->status_pemesanan }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Nomor Rekening:</h5>
                            <p>{{ $histori->no_rekening }}</p>
                        </div>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('customer.histori-reservasi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
