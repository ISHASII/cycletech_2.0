<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;
use App\Models\Reward;
use Illuminate\Support\Facades\Auth;

class GamificationController extends Controller
{
    // Menambahkan poin saat upload artikel
    public function addPointsOnUpload()
    {
        $user = Auth::user();
        $point = Point::firstOrCreate(['user_id' => $user->id]);
        $point->points += 50;
        $point->save();

        return redirect()->back()->with('success', 'Poin berhasil ditambahkan!');
    }

    // Menukarkan poin untuk hadiah
    public function redeemReward(Request $request)
    {
        $reward = Reward::findOrFail($request->input('reward_id'));
        $nasabah = Auth::guard('nasabah')->user(); // Menggunakan guard 'nasabah'
        $point = Point::where('nasabah_id', $nasabah->id)->first();

        if (!$point || $point->points < $reward->points_required) {
            // Jika poin tidak cukup, redirect dengan notifikasi error
            return redirect()->back()->with('error', 'Poin Anda tidak mencukupi untuk menukarkan hadiah ini!');
        }

        // Kurangi poin dan simpan
        $point->points -= $reward->points_required;
        $point->save();

        // Redirect dengan notifikasi sukses
        return redirect()->back()->with('success', "Selamat! Anda berhasil menukarkan hadiah '{$reward->name}'.");
    }
}