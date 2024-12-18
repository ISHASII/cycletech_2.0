<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Reward;

class AdminRewardController extends Controller
{
    public function index()
    {
        $rewards = Reward::paginate(10);
        return view('Admin.reward.index', compact('rewards'));
    }

    public function create()
    {
        return view('Admin.reward.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'points_required' => 'required|integer|min:0',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('rewards', 'public');
        }

        // Simpan ke database
        Reward::create([
            'name' => $request->input('name'),
            'points_required' => $request->input('points_required'),
            'foto' => $fotoPath,
        ]);

        return redirect()->route('admin.rewards.index')->with('success', 'Reward berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $reward = Reward::findOrFail($id);
        return view('Admin.reward.edit', compact('reward'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'points_required' => 'required|integer|min:0',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $reward = Reward::findOrFail($id);

        // Jika ada file foto baru, simpan dan hapus yang lama
        if ($request->hasFile('foto')) {
            if ($reward->foto && Storage::exists('public/' . $reward->foto)) {
                Storage::delete('public/' . $reward->foto);
            }

            $reward->foto = $request->file('foto')->store('rewards', 'public');
        }

        // Update data reward
        $reward->update([
            'name' => $request->input('name'),
            'points_required' => $request->input('points_required'),
            'foto' => $reward->foto, // Pastikan kolom foto tetap tersimpan
        ]);

        return redirect()->route('admin.rewards.index')->with('success', 'Reward berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $reward = Reward::findOrFail($id);

        // Hapus foto dari storage jika ada
        if ($reward->foto && Storage::exists('public/' . $reward->foto)) {
            Storage::delete('public/' . $reward->foto);
        }

        $reward->delete();

        return redirect()->route('admin.rewards.index')->with('success', 'Reward berhasil dihapus.');
    }
}
