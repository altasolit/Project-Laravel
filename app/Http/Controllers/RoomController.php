<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('fasilitas')->get(); // Load relasi fasilitas juga
        return view('admin.kamar', compact('rooms'));
    }

    public function create()
    {
        $fasilitas = Fasilitas::all(); // Untuk dipilih saat membuat kamar
        return view('kamar.create', compact('fasilitas'));
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
            'fasilitas_id' => 'array|exists:fasilitas,id', // Validasi relasi
        ]);

        $imagePath = $request->file('gambar')->store('room_images', 'public');

        $room = Room::create([
            'nomor_kamar' => $request->nomor_kamar,
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $request->harga,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        if ($request->has('fasilitas_id')) {
            $room->fasilitas()->attach($request->fasilitas_id);
        }

        return redirect()->route('admin.kamar')->with('success', 'Kamar berhasil ditambahkan');
    }

    public function edit($id)
    {
        $room = Room::with('fasilitas')->findOrFail($id);
        $fasilitas = Fasilitas::all();
        return view('kamar.edit', compact('room', 'fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        $request->validate([
            'nomor_kamar' => 'required|unique:rooms,nomor_kamar,' . $room->id,
            'tipe_kamar' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'fasilitas_id' => 'array|exists:fasilitas,id',
        ]);

        $data = $request->only(['nomor_kamar', 'tipe_kamar', 'harga', 'status', 'deskripsi']);

        if ($request->hasFile('gambar')) {
            if ($room->gambar) {
                Storage::disk('public')->delete($room->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('room_images', 'public');
        }

        $room->update($data);

        if ($request->has('fasilitas_id')) {
            $room->fasilitas()->sync($request->fasilitas_id); // Update fasilitas
        }

        return redirect()->route('admin.kamar')->with('success', 'Kamar berhasil diperbarui');
    }

    public function destroy(Room $room)
    {
        if ($room->gambar) {
            Storage::disk('public')->delete($room->gambar);
        }

        $room->fasilitas()->detach(); // Hapus relasi pivot terlebih dahulu
        $room->delete();

        return redirect()->route('admin.kamar')->with('success', 'Kamar berhasil dihapus');
    }
}
