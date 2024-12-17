<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Notification; // Tambahkan model Notification
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminArtikelController extends Controller
{
    public function index()
    {
        $articles = Artikel::latest()->paginate(5);
        return view('Admin.artikel.index', compact('articles'));
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Proses upload foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('artikel', 'public');
        }

        // Simpan data artikel ke database dengan waktu terkini
        $artikel = Artikel::create([
            'judul_artikel' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'foto' => $fotoPath,
            'created_at' => now(), // Waktu saat ini
            'updated_at' => now(), // Waktu saat ini
        ]);

        // Simpan notifikasi untuk user
        Notification::create([
            'user_id' => null, // Null untuk notifikasi global
            'type' => 'artikel',
            'message' => 'Admin telah menambahkan artikel baru berjudul: ' . $artikel->judul_artikel,
            'read_status' => false,
        ]);

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('Admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $artikel = Artikel::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($artikel->foto) {
                Storage::delete('public/' . $artikel->foto);
            }
            $fotoPath = $request->file('foto')->store('artikel', 'public');
            $artikel->foto = $fotoPath;
        }

        $artikel->update([
            'judul_artikel' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->foto && Storage::exists('public/' . $artikel->foto)) {
            Storage::delete('public/' . $artikel->foto);
        }

        $artikel->delete();

        return response()->json(['success' => 'Artikel berhasil dihapus']);
    }
}