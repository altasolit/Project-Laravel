@extends('layouts.app')

@section('content')
    <h1>Edit Kamar</h1>
    <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nomor Kamar:</label>
        <input type="text" name="room_number" value="{{ $room->room_number }}" required>

        <label>Tipe:</label>
        <input type="text" name="type" value="{{ $room->type }}" required>

        <label>Harga:</label>
        <input type="number" name="price_per_night" value="{{ $room->price_per_night }}" required>

        <label>Status:</label>
        <select name="status" required>
            <option value="Tersedia" {{ $room->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
            <option value="Terisi" {{ $room->status == 'Terisi' ? 'selected' : '' }}>Terisi</option>
            <option value="Diperbaiki" {{ $room->status == 'Diperbaiki' ? 'selected' : '' }}>Perbaikan</option>
        </select>

        <label>Deskripsi:</label>
        <textarea name="description" required>{{ $room->description }}</textarea>

        <label>Gambar (Opsional):</label>
        <input type="file" name="image">

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
