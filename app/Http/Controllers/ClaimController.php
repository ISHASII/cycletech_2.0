<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claim;
use App\Models\Nasabah;
use App\Models\Reward;

class Claimcontroller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'reward_id' => 'required|exists:rewards,id',
            'address' => 'required|string|max:255',
        ]);

        $nasabah = auth('nasabah')->user();
        $reward = Reward::findOrFail($request->reward_id);

        if ($nasabah->point->points < $reward->points_required) {
            return redirect()->back()->with('error', 'Poin Anda tidak mencukupi.');
        }

        Claim::create([
            'nasabah_id' => $nasabah->id,
            'reward_id' => $reward->id,
            'address' => $request->address,
            'status' => 'pending',
        ]);

        $nasabah->point->decrement('points', $reward->points_required);

        return redirect()->back()->with('success', 'Klaim hadiah berhasil. Menunggu validasi admin.');
    }
}