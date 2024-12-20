<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Claim;
use App\Models\Notification;

class AdminClaimController extends Controller
{
    public function index()
    {
        // Hanya ambil klaim dengan status pending
        $claims = Claim::with(['nasabah', 'reward'])
            ->where('status', 'pending')
            ->latest()
            ->paginate(10);

        return view('admin.claim.index', compact('claims'));
    }

    public function approve($id)
    {
        $claim = Claim::findOrFail($id);

        // Set status menjadi approved
        $claim->update(['status' => 'approved']);

        // Kirim notifikasi ke nasabah
        if ($claim->nasabah) {
            Notification::create([
                'nasabah_id' => $claim->nasabah->id,
                'type' => 'claim',
                'message' => 'Klaim hadiah Anda untuk "' . $claim->reward->name . '" telah disetujui oleh admin.',
                'read_status' => false,
            ]);
        }

        return redirect()->route('admin.claim.index')->with('success', 'Klaim hadiah berhasil disetujui dan notifikasi dikirim.');
    }

    public function reject($id)
    {
        $claim = Claim::findOrFail($id);

        // Set status menjadi rejected
        $claim->update(['status' => 'rejected']);

        // Kirim notifikasi ke nasabah
        if ($claim->nasabah) {
            Notification::create([
                'nasabah_id' => $claim->nasabah->id,
                'type' => 'claim',
                'message' => 'Klaim hadiah Anda untuk "' . $claim->reward->name . '" telah ditolak oleh admin.',
                'read_status' => false,
            ]);
        }

        return redirect()->route('admin.claim.index')->with('success', 'Klaim hadiah berhasil ditolak dan notifikasi dikirim.');
    }
}