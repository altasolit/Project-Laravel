@extends('layouts.app')

@section('content')
    <h1>Edit Kamar</h1>
    <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nomor Kamar:</label>
''        <input type="text" name="nomor_kamar" value="{{ $room->nomor_kamar }}" required>

        <label>Tipe:</label>
        <select name="tipe_kamar" required>
            <option value="Standard" {{ $room->tipe_kamar == 'Standard' ? 'selected' : '' }}>Standard</option>
            <option value="Superior" {{ $room->tipe_kamar == 'Superior' ? 'selected' : '' }}>Superior</option>
            <option value="Deluxe" {{ $room->tipe_kamar == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
            <option value="Executive" {{ $room->tipe_kamar == 'Executive' ? 'selected' : '' }}>Executive</option>
        </select>

        <label>Harga:</label>
        <input type="number" name="harga" value="{{ $room->harga }}" required>

        <label>Status:</label>
        <select name="status" required>
            <option value="Tersedia" {{ $room->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
            <option value="Terisi" {{ $room->status == 'Terisi' ? 'selected' : '' }}>Terisi</option>
            <option value="Diperbaiki" {{ $room->status == 'Diperbaiki' ? 'selected' : '' }}>Perbaikan</option>
        </select>

        <label>Deskripsi:</label>
        <textarea name="deskripsi" required>{{ $room->deskripsi }}</textarea>

        {{-- Tampilkan gambar lama --}}
        @if ($room->gambar)
            <p>Gambar saat ini:</p>
            <img src="{{ asset('storage/' . $room->gambar) }}" width="150">
        @endif

        <label>Ganti Gambar (Opsional):</label>
        <input type="file" name="gambar">

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
