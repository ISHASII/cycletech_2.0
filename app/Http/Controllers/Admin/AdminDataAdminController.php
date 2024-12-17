<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminDataAdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $admins = Admin::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('email', 'like', "%{$search}%");
        })->paginate(10);

        return view('Admin.dataadmin.index', compact('admins'));
    }

    public function edit($id)
    {
        // Ambil data admin berdasarkan ID
        $admin = Admin::findOrFail($id);

        // Kirim data admin ke view edit.blade.php
        return view('Admin.dataadmin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $data = $request->validate([
            'name' => 'required|string|max:55',
            'email' => 'required|email|max:55',
            'password' => 'nullable|string|min:8',
        ]);

        // Ambil admin berdasarkan ID
        $admin = Admin::findOrFail($id);

        // Jika password diberikan, hash password baru
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        // Update data admin
        $admin->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.dataadmin.index')->with('success', 'Data admin berhasil diperbarui');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.dataadmin.index')->with('success', 'Data admin berhasil dihapus');
    }
}