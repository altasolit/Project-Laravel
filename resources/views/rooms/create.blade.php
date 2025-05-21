@extends('layouts.app')

@section('content')
    <h1>Tambah Kamar</h1>
    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nomor Kamar:</label>

        <input type="text" name="nomor_kamar" required>

        <label>Tipe:</label>
        <input type="text" name="tipe" required>

        <label>Harga:</label>
        <input type="number" name="harga" required>

        <label>Status:</label>
        <select name="status" required>
            <option value="Tersedia">Tersedia</option>
            <option value="Terisi">Terisi</option>
            <option value="Perbaikan">Perbaikan</option>
        </select>

        <label>Deskripsi:</label>

        <textarea name="deskripsi" required></textarea>

        <label>Gambar:</label>
        <input type="file" name="gambar" required>

        <button type="submit">Tambah Kamar</button>
    </form>
@endsection
