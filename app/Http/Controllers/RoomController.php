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
            'room_number' => 'required|unique:rooms',
            'type' => 'required',
            'price_per_night' => 'required|numeric',
            'status' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        
        // dd($request->all()); // Debug: Lihat data sebelum insert

        $imagePath = $request->file('image')->store('room_images', 'public');

        Room::create([
            'room_number' => $request->room_number,
            'type' => $request->type,
            'price_per_night' => $request->price_per_night,
            'status' => $request->status,
            'description' => $request->description,
            'image' => $imagePath,
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
            'room_number' => 'required|unique:rooms,room_number,' . $room->id,
            'type' => 'required',
            'price_per_night' => 'required|numeric',
            'status' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($room->image) {
                Storage::disk('public')->delete($room->image);
            }
            $imagePath = $request->file('image')->store('room_images', 'public');
            $room->image = $imagePath;
        }

        // $room->update($request->except('image'));
        $room->update([
            'room_number' => $request->room_number,
            'type' => $request->type,
            'price_per_night' => $request->price_per_night,
            'status' => in_array($request->status, ['Tersedia', 'Terisi', 'Diperbaiki']) ? $request->status : 'Tersedia',
            'description' => $request->description,
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
