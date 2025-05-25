@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Reservasi</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('reservations.create') }}" class="btn btn-primary mb-3">+ Buat Reservasi Baru</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Customer</th>
                    <th>Tipe Kamar</th>
                    <th>Tanggal Check-In</th>
                    <th>Tanggal Check-Out</th>
                    <th>Jumlah Tamu</th>
                    <th>Status Pembayaran</th>
                    <th>Status Pemesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if ($reservasi->isEmpty())
                <tr>
                    <td colspan="6">
                        <div class="alert alert-danger text-center m-0">
                            Data reservasi kosong.
                        </div>
                    </td>
                </tr>
                @else
                @foreach($reservations as $reservasi)
                    <tr>
                        <td>{{ $reservasi->user->name }}</td>
                        <td>{{ $reservasi->room->tipe_kamar }}</td>
                        <td>{{ $reservasi->check_in }}</td>
                        <td>{{ $reservasi->check_out }}</td>
                        <td>{{ $reservasi->guests }}</td>
                        <td>{{ $reservasi->payment_status }}</td>
                        <td>{{ $reservasi->booking_status }}</td>
                        <td>
                            <a href="{{ route('reservations.edit', $reservasi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('reservations.destroy', $reservasi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus reservasi ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
