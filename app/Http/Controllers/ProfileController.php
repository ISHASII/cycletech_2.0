<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Nasabah;

class ProfileController extends Controller
{
    // Menampilkan halaman profil
    public function show()
    {
        /** @var Nasabah|null $user */
        $user = Auth::guard('nasabah')->user();

        if (!$user) {
            return redirect()->route('login.nasabah')->with('error', 'Silakan login terlebih dahulu.');
        }

        return view('Profile.index', compact('user'));
    }

    // Menampilkan halaman keamanan
    public function showSecurity()
    {
        /** @var Nasabah|null $user */
        $user = Auth::guard('nasabah')->user();

        if (!$user) {
            return redirect()->route('login.nasabah')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil data pengguna terbaru dari database
        $user->refresh();

        return view('Profile.keamanan', compact('user'));
    }

    // Menambahkan atau memperbarui foto profil
    public function updatePhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        /** @var Nasabah $user */
        $user = Auth::guard('nasabah')->user();

        // Hapus foto lama jika ada
        if ($user->photo) {
            Storage::disk('public')->delete($user->photo);
        }

        // Simpan foto baru
        $path = $request->file('photo')->store('photos', 'public');
        $user->photo = $path;
        $user->save();

        return back()->with('success', 'Foto profil berhasil diperbarui.');
    }

    // Memperbarui kata sandi
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        /** @var Nasabah $user */
        $user = Auth::guard('nasabah')->user();

        // Validasi kata sandi lama
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Kata sandi saat ini tidak sesuai.']);
        }

        // Update hashed password dan plaintext password
        $user->password = Hash::make($request->new_password);
        $user->password_plaintext = $request->new_password; // Simpan plaintext password
        $user->save();

        return back()->with('success', 'Kata sandi berhasil diperbarui.');
    }

    // Menghapus akun nasabah
    public function deleteAccount()
    {
        /** @var Nasabah $user */
        $user = Auth::guard('nasabah')->user();

        if ($user) {
            Auth::guard('nasabah')->logout();
            $user->delete();
        }

        return redirect('/')->with('success', 'Akun berhasil dihapus.');
    }
}