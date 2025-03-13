@extends('layouts.app')

@section('content')
    <h1>Tambah Kamar</h1>
    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nomor Kamar:</label>
        <input type="text" name="room_number" required>

        <label>Tipe:</label>
        <input type="text" name="type" required>

        <label>Harga:</label>
        <input type="number" name="price_per_night" required>

        <label>Status:</label>
        <select name="status" required>
            <option value="Tersedia">Tersedia</option>
            <option value="Terisi">Terisi</option>
            <option value="Perbaikan">Perbaikan</option>
        </select>

        <label>Deskripsi:</label>
        <textarea name="description" required></textarea>

        <label>Gambar:</label>
        <input type="file" name="image" required>

        <button type="submit">Tambah Kamar</button>
    </form>
@endsection
