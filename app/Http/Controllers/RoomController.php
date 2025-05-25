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
        return view('admin.kamar', compact('rooms'));
    }

    public function create()
    {
        return view('kamar.create');
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

        $imagePath = $request->file('gambar')->store('room_images', 'public');

        Room::create([
            'nomor_kamar' => $request->nomor_kamar,
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $request->harga,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('admin.kamar')->with('success', 'Kamar berhasil ditambahkan');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('kamar.edit', compact('room'));
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
            ]);

            $data = $request->only(['nomor_kamar', 'tipe_kamar', 'harga', 'status', 'deskripsi']);

            // Handle gambar
            if ($request->hasFile('gambar')) {
                if ($room->gambar) {
                    Storage::disk('public')->delete($room->gambar);
                }
                $data['gambar'] = $request->file('gambar')->store('room_images', 'public');
            }

            $room->update($data);

            return redirect()->route('admin.kamar')->with('success', 'Kamar berhasil diperbarui');
        }


    public function destroy(Room $room)
    {
        if ($room->gambar) {
            Storage::disk('public')->delete($room->gambar);
        }

        $room->delete();
        return redirect()->route('admin.kamar')->with('success', 'Kamar berhasil dihapus');
    }
}
