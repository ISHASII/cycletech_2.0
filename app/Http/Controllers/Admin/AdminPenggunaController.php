<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use Illuminate\Http\Request;

class AdminPenggunaController extends Controller
{
    /**
     * Menampilkan daftar pengguna (nasabah).
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Ambil query pencarian
        $search = $request->input('search');

        // Query data nasabah dengan fitur pencarian
        $nasabah = Nasabah::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('phone', 'like', "%$search%");
            })
            ->paginate(10); // Menampilkan 10 data per halaman

        // Mengirim data ke view 'Admin.datauser.index'
        return view('Admin.datauser.index', compact('nasabah', 'search'));
    }

    /**
     * Menghapus pengguna berdasarkan ID.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Mencari data pengguna berdasarkan ID
        $nasabah = Nasabah::findOrFail($id);

        // Menghapus data pengguna
        $nasabah->delete();

        // Redirect ke halaman data pengguna dengan pesan sukses
        return redirect()->route('admin.datauser.index')
            ->with('success', 'Pengguna berhasil dihapus.');
    }
}