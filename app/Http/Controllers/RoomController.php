<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_kamar' => 'required|unique:rooms',
            'tipe_kamar' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        
        // dd($request->all()); // Debug: Lihat data sebelum insert


        $imagePath = $request->file('gambar')->store('room_images', 'public');

        Room::create([
            'nomor_kamar' => $request->nomor_kamar,
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $request->harga,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('rooms.index')->with('success', 'Kamar berhasil ditambahkan');
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([

            'nomor_kamar' => 'required|unique:rooms,nomor_kamar,' . $room->id,
            'tipe_kamar' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($room->image) {
                Storage::disk('public')->delete($room->image);
            }
            $imagePath = $request->file('gambar')->store('room_images', 'public');
            $room->image = $imagePath;
        }

        // $room->update($request->except('image'));
        $room->update([

            'nomor_kamar' => $request->nomor_kamar,
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $request->harga,
            'status' => in_array($request->status, ['Tersedia', 'Terisi', 'Diperbaiki']) ? $request->status : 'Tersedia',
            'deskripsi' => $request->deskripsi,
        ]);
        
        return redirect()->route('rooms.index')->with('success', 'Kamar berhasil diperbarui');
    }

    public function destroy(Room $room)
    {
        if ($room->image) {
            Storage::disk('public')->delete($room->image);
        }
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Kamar berhasil dihapus');
    }
}
