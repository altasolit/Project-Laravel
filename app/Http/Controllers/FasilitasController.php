<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('Fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('Fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required|unique:fasilitas',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('gambar')->store('Fasilitas_images', 'public');

        Fasilitas::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('Fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan');
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('Fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, Fasilitas $fasilitas)
    {
        $request->validate([
            'nama_fasilitas' => 'required|unique:fasilitas,nama_fasilitas,' . $fasilitas->id,
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($fasilitas->gambar) {
                Storage::disk('public')->delete($fasilitas->gambar);
            }

            $imagePath = $request->file('gambar')->store('Fasilitas_images', 'public');
            $fasilitas->gambar = $imagePath;
        }

        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->save();

        return redirect()->route('Fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        if ($fasilitas->gambar) {
            Storage::disk('public')->delete($fasilitas->gambar);
        }

        $fasilitas->delete();
        return redirect()->route('Fasilitas.index')->with('success', 'Fasilitas berhasil dihapus');
    }
}
