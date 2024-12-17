<?php

namespace App\Http\Controllers;

use App\Models\Kreasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KreasiController extends Controller
{
    // Menampilkan semua data kreasi (umum)
    public function index()
    {
        // Ambil hanya kreasi yang diapprove, diurutkan berdasarkan tanggal dibuat
        $kreasis = Kreasi::where('status', 'approved')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('Kreasi.kreasi', compact('kreasis'));
    }

    // Menampilkan detail satu kreasi berdasarkan ID
    public function show($id)
    {
        // Ambil kreasi berdasarkan ID dengan status approved
        $kreasi = Kreasi::where('id', $id)->where('status', 'approved')->first();

        // Jika data tidak ditemukan atau belum diapprove
        if (!$kreasi) {
            return redirect()->route('kreasi')->with('error', 'Kreasi tidak ditemukan atau belum disetujui.');
        }

        // Ambil kreasi serupa berdasarkan kategori
        $kreasiSerupa = Kreasi::where('kategori_kreasi', $kreasi->kategori_kreasi)
            ->where('id', '!=', $kreasi->id)
            ->where('status', 'approved') // Pastikan hanya yang diapprove
            ->take(4)
            ->get();

        // Kirim data ke view
        return view('Kreasi.artikelkreasi', compact('kreasi', 'kreasiSerupa'));
    }


}