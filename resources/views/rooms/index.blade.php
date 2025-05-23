@extends('layouts.app')

@section('content')
    <h1>Daftar Kamar</h1>
    <a href="{{ route('rooms.create') }}">Tambah Kamar</a>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>No</th>
            <th>Tipe Kamar</th>
            <th>Harga Per Malam</th>
            <th>Status Kamar</th>
            <th>Deskripsi Kamar</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        @foreach($rooms as $room)
        <tr>

            <td>{{ $room->nomor_kamar }}</td>
            <td>{{ $room->tipe }}</td>
            <td>{{ $room->harga }}</td>
            <td>{{ $room->status }}</td>
            <td>{{ $room->deskripsi }}</td>
            <td><img src="{{ asset('storage/' . $room->gambar) }}" width="100"></td>

            <td>
                <a href="{{ route('rooms.edit', $room->id) }}">Edit</a>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
