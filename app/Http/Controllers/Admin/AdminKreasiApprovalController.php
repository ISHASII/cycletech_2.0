<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kreasi;
use App\Models\Point;
use App\Models\Notification;
use Illuminate\Http\Request;

class AdminKreasiApprovalController extends Controller
{
    /**
     * Menampilkan daftar kreasi dengan status pending.
     */
    public function index()
    {
        // Ambil hanya kreasi dengan status pending, dan tambahkan pagination
        $pendingKreasis = Kreasi::where('status', 'pending')->paginate(10);

        return view('Admin.kreasi.approval', compact('pendingKreasis'));
    }

    /**
     * Menerima kreasi.
     */
    public function approve($id)
    {
        $kreasi = Kreasi::findOrFail($id);

        // Set status menjadi approved
        $kreasi->status = 'approved';
        $kreasi->save();

        // Cari nasabah berdasarkan kolom 'author'
        $nasabah = \App\Models\Nasabah::where('name', $kreasi->author)->first();

        if ($nasabah) {
            // Tambahkan poin untuk nasabah
            $point = Point::firstOrCreate(['nasabah_id' => $nasabah->id]);
            $point->points += 50;
            $point->save();

            // Simpan notifikasi
            Notification::create([
                'nasabah_id' => $nasabah->id,
                'type' => 'kreasi',
                'message' => 'Kreasi berjudul "' . $kreasi->judul_kreasi . '" telah disetujui oleh admin!',
                'read_status' => false,
            ]);
        }

        return redirect()->route('admin.kreasi.approval')->with('success', 'Kreasi berhasil disetujui, poin ditambahkan, dan notifikasi dikirim.');
    }

    /**
     * Menolak kreasi.
     */
    public function reject($id)
    {
        $kreasi = Kreasi::findOrFail($id);

        // Set status menjadi rejected
        $kreasi->status = 'rejected';
        $kreasi->save();

        // Cari nasabah berdasarkan kolom 'author'
        $nasabah = \App\Models\Nasabah::where('name', $kreasi->author)->first();

        if ($nasabah) {
            // Simpan notifikasi
            Notification::create([
                'nasabah_id' => $nasabah->id,
                'type' => 'kreasi',
                'message' => 'Kreasi Anda berjudul "' . $kreasi->judul_kreasi . '" telah ditolak oleh admin.',
                'read_status' => false,
            ]);
        }

        return redirect()->route('admin.kreasi.approval')->with('success', 'Kreasi telah ditolak dan notifikasi dikirim.');
    }
}
