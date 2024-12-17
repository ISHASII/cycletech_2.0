<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriSampah;
use App\Models\Kreasi;
use App\Models\Point;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class NasabahKreasiController extends Controller
{
    public function index()
    {
        // Pastikan pengguna telah login
        if (!auth()->guard('nasabah')->check()) {
            return redirect()->route('login.nasabah')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil pengguna yang sedang login
        $nasabah = auth()->guard('nasabah')->user();
        $username = $nasabah->name;

        // Ambil hanya kreasi milik nasabah yang sudah disetujui
        $kreasiku = Kreasi::where('author', $username)
            ->where('status', 'approved') // Filter kreasi yang disetujui
            ->get();

        return view('Kreasiku.kreasiku', compact('kreasiku'));
    }

    public function create()
    {
        $kategoris = KategoriSampah::all(); // Ambil data kategori
        return view('Kreasi.unggahkreasi', compact('kategoris'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|integer|exists:kategori_sampah,id',
            'tanggal' => 'required|date',
            'alat_bahan' => 'required|string',
            'langkah' => 'required|string',
            'fileToUpload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil pengguna yang sedang login
        $nasabah = auth()->guard('nasabah')->user();

        // Simpan kreasi baru dengan status pending
        $kategori = KategoriSampah::find($validatedData['kategori']);
        $kreasi = new Kreasi();
        $kreasi->author = $nasabah->name;
        $kreasi->judul_kreasi = $validatedData['judul'];
        $kreasi->kategori_kreasi = $kategori->kategori;
        $kreasi->tanggal = $validatedData['tanggal'];
        $kreasi->alat_bahan = $validatedData['alat_bahan'];
        $kreasi->langkah = $validatedData['langkah'];
        $kreasi->status = 'pending'; // Set status ke pending

        // Simpan file gambar
        if ($request->hasFile('fileToUpload')) {
            $file = $request->file('fileToUpload');
            $kreasi->foto_kreasi = $file->store('kreasi_images', 'public');
        }

        $kreasi->save();

        return redirect()->route('kreasiku')->with('success', 'Kreasi berhasil diunggah dan menunggu validasi dari admin.');
    }

    public function show($id)
    {
        $kreasi = Kreasi::findOrFail($id); // Ambil kreasi berdasarkan ID
        return view('Kreasiku.editkreasi', compact('kreasi'));
    }

    public function edit($id)
    {
        // Pastikan pengguna sudah login
        if (!auth()->guard('nasabah')->check()) {
            return redirect()->route('login.nasabah')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil data kreasi berdasarkan ID
        $kreasi = Kreasi::findOrFail($id);

        // Ambil data kategori sampah untuk dropdown
        $kategoris = KategoriSampah::all();

        return view('Kreasiku.editkreasiku', compact('kreasi', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        try {
            // Validasi data input
            $request->validate([
                'judul' => 'required|string|max:255',
                'kategori' => 'required|string|max:255', // Sesuai dengan tipe kategori_kreasi
                'tanggal' => 'required|date',
                'alat_bahan' => 'required|string',
                'langkah' => 'required|string',
                'fileToUpload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi opsional untuk gambar
            ]);

            // Temukan kreasi berdasarkan ID
            $kreasi = Kreasi::findOrFail($id);

            // Update data kecuali gambar
            $kreasi->judul_kreasi = $request->input('judul');
            $kreasi->kategori_kreasi = $request->input('kategori'); // Pastikan kategori sesuai dengan kolom kategori_kreasi
            $kreasi->tanggal = $request->input('tanggal');
            $kreasi->alat_bahan = $request->input('alat_bahan');
            $kreasi->langkah = $request->input('langkah');

            // Jika ada gambar diupload, update gambar
            if ($request->hasFile('fileToUpload')) {
                $file = $request->file('fileToUpload');
                $path = $file->store('kreasi_images', 'public');

                // Hapus gambar lama jika ada
                if (!empty($kreasi->foto_kreasi) && Storage::exists('public/' . $kreasi->foto_kreasi)) {
                    Storage::delete('public/' . $kreasi->foto_kreasi);
                }

                $kreasi->foto_kreasi = $path; // Update dengan gambar baru
            }

            $kreasi->save(); // Simpan perubahan ke database

            // Redirect dengan pesan sukses
            return redirect()->route('kreasiku')->with('success', 'Kreasi berhasil diperbarui!');
        } catch (\Exception $e) {
            // Tangani error
            Log::error('Update Error:', ['message' => $e->getMessage()]); // Log error
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $kreasi = Kreasi::findOrFail($id);
        $kreasi->delete(); // Hapus kreasi
        return redirect()->route('kreasiku')->with('success', 'Kreasi berhasil dihapus!');
    }
}