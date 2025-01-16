<?php

namespace App\Http\Controllers;

use App\Models\foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddPhotoController extends Controller
{
    public function AddPhoto(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'album' => 'required',
        ]);

        $path = $request->file('image')->store('public/image/' . auth()->id());

        $publicPath = Storage::url($path);

        foto::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'lokasifile' => $request->path,
            'album' => $request->album,
            'tanggal' => now(),
        ]);

        return redirect()->back()->with('success', 'Upload Foto Berhasil!');
    }
}
