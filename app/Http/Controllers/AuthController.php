<?php

namespace App\Http\Controllers;

use App\Models\Nasabah; // Model untuk nasabah
use App\Models\Admin;   // Model untuk admin (jika diperlukan)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login nasabah
    public function showNasabahLoginForm()
    {
        return view('Akun.login'); // File Blade 'Akun.login' harus tersedia
    }

    // Menampilkan form login admin
    public function showAdminLoginForm()
    {
        return view('Admin.login'); // File Blade 'Admin.login' harus tersedia
    }

    // Menampilkan form daftar nasabah
    public function showNasabahSigninForm()
    {
        return view('Akun.signin'); // File Blade 'Akun.signin' harus tersedia
    }

    // Proses pendaftaran nasabah
    public function createSignin(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|min:10',
            'email' => 'required|email|unique:nasabah,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            // Pesan validasi dalam bahasa Indonesia
            'name.required' => 'Kolom nama wajib diisi.',
            'phone.required' => 'Kolom nomor telepon wajib diisi.',
            'phone.min' => 'Kolom nomor telepon harus terdiri dari minimal 10 karakter.',
            'email.required' => 'Kolom email wajib diisi.',
            'email.email' => 'Kolom email harus berupa alamat email yang valid.',
            'email.unique' => 'Email ini sudah digunakan. Gunakan email lain.',
            'password.required' => 'Kolom kata sandi wajib diisi.',
            'password.min' => 'Kolom kata sandi harus terdiri dari minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.',
        ]);

        try {
            // Buat data nasabah
            Nasabah::create([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']), // Enkripsi password
                'password_plaintext' => $validated['password'], // Simpan password dalam plaintext
            ]);

            // Redirect ke halaman login dengan pesan sukses
            return redirect()->route('login.nasabah')->with('success', 'Akun berhasil dibuat. Silakan login menggunakan email dan password Anda.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return back()->withErrors(['error' => 'Maaf, terjadi kesalahan: ' . $e->getMessage()])->withInput();
        }
    }

    // Proses login untuk nasabah
    public function submitNasabahLogin(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Cek autentikasi dengan guard nasabah
        if (!Auth::guard('nasabah')->attempt($credentials, $request->filled('remember'))) {
            return back()
                ->withErrors(['email' => 'Email atau password salah.'])
                ->withInput();
        }

        // Regenerasi session untuk keamanan
        $request->session()->regenerate();

        // Redirect ke dashboard nasabah
        return redirect()->route('dashboard.nasabah');
    }

    // Proses login untuk admin
    public function submitAdminLogin(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Cek autentikasi dengan guard admin
        if (!Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            return back()
                ->withErrors(['email' => 'Email atau password salah.'])
                ->withInput();
        }

        // Regenerasi session untuk keamanan
        $request->session()->regenerate();

        // Redirect ke dashboard admin
        return redirect()->route('admin.dashboard');
    }

    // Proses logout untuk nasabah dan admin
    public function logout(Request $request)
    {
        // Logout pengguna saat ini
        Auth::logout();

        // Bersihkan sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman landing
        return redirect('/');
    }
}
