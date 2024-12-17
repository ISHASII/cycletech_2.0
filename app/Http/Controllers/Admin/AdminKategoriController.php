<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriSampah;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    /**
     * Menampilkan daftar kategori sampah.
     */
    public function index()
    {
        // Mengambil semua kategori dengan pagination
        $categories = KategoriSampah::paginate(10); // Pagination untuk menampilkan data per halaman
        return view('Admin.categories.index', compact('categories'));
    }

    /**
     * Menampilkan form tambah kategori sampah.
     */
    public function create()
    {
        // Mengarahkan ke view tambah.blade.php
        return view('Admin.categories.tambah');
    }

    /**
     * Menyimpan kategori sampah baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        // Menyimpan kategori baru ke database
        KategoriSampah::create([
            'kategori' => $request->kategori,
        ]);

        // Redirect ke halaman daftar kategori dengan pesan sukses
        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit kategori sampah.
     */
    public function edit($id)
    {
        // Cari kategori berdasarkan ID
        $category = KategoriSampah::findOrFail($id);
        return view('Admin.categories.edit', compact('category'));
    }

    /**
     * Memperbarui kategori sampah di database.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        // Cari kategori berdasarkan ID
        $category = KategoriSampah::findOrFail($id);

        // Update data kategori
        $category->update([
            'kategori' => $request->kategori,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Menghapus kategori sampah dari database.
     */
    public function destroy($id)
    {
        // Cari kategori berdasarkan ID
        $category = KategoriSampah::findOrFail($id);

        // Hapus kategori dari database
        $category->delete();

        // Redirect ke halaman daftar kategori dengan pesan sukses
        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}