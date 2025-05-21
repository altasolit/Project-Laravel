@extends('layouts.app')

@section('content')
    <h1>Daftar Kamar</h1>
    <a href="{{ route('rooms.create') }}">Tambah Kamar</a>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>No. Kamar</th>
            <th>Tipe</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        @foreach($rooms as $room)
        <tr>
            <td>{{ $room->room_number }}</td>
            <td>{{ $room->type }}</td>
            <td>{{ $room->price }}</td>
            <td>{{ $room->status }}</td>
            <td>{{ $room->description }}</td>
            <td><img src="{{ asset('storage/' . $room->image) }}" width="100"></td>
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
