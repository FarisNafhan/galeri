<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AddAlbumController extends Controller
{
    public function album(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);

        Album::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => now(),
            'UserID' => auth()->id(),
        ]);
        return redirect()->back()->with('success', 'Album Berhasil Ditambahkan!');
    }
}
