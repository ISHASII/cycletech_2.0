<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kreasi;

class AdminKreasiController extends Controller
{
    // Menampilkan daftar kreasi yang sudah di-approve
    public function index()
    {
        // Ambil kreasi dengan status approved
        $kreasis = Kreasi::where('status', 'approved')->paginate(5); // Menampilkan 5 data per halaman

        // Kirim data ke view
        return view('Admin.kreasi.index', compact('kreasis'));
    }

    // Menghapus kreasi berdasarkan ID
    public function destroy($id)
    {
        // Cari kreasi berdasarkan ID
        $kreasi = Kreasi::findOrFail($id);

        // Hapus data dari database
        $kreasi->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.kreasi.index')->with('success', 'Kreasi berhasil dihapus.');
    }
}