<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Notification; // Tambahkan untuk menampilkan notifikasi

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard dengan daftar artikel dan notifikasi.
     */
    public function index()
    {
        // Ambil 6 artikel terbaru
        $articles = Artikel::latest()->take(6)->get();

        // Ambil notifikasi untuk nasabah yang sedang login
        $nasabah = auth('nasabah')->user();
        $notifications = Notification::where('nasabah_id', $nasabah->id)
            ->latest()
            ->get();

        // Kirim data artikel dan notifikasi ke view
        return view('Dashboard.dashboard', compact('articles', 'notifications'));
    }

    /**
     * Menampilkan halaman detail artikel.
     */
    public function showArticleDetail($id)
    {
        // Ambil artikel berdasarkan ID
        $article = Artikel::findOrFail($id);

        // Kirim data artikel ke view
        return view('Dashboard.detailartikel', compact('article'));
    }

    /**
     * Tandai semua notifikasi sebagai sudah dibaca.
     */
    public function markNotificationsRead()
    {
        $nasabah = auth('nasabah')->user();

        // Tandai semua notifikasi sebagai sudah dibaca untuk nasabah ini
        Notification::where('nasabah_id', $nasabah->id)
            ->update(['read_status' => true]);

        return redirect()->back()->with('success', 'Semua notifikasi telah ditandai sebagai dibaca.');
    }
}