<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\Admin\AdminArtikelController;
use App\Http\Controllers\Admin\AdminKreasiController;
use App\Http\Controllers\Admin\AdminPenggunaController;
use App\Http\Controllers\Admin\AdminUploadArtikelController;
use App\Http\Controllers\Admin\AdminDataAdminController;
use App\Http\Controllers\Admin\AdminRewardController;
use App\Http\Controllers\Admin\AdminKreasiApprovalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KreasiController;
use App\Http\Controllers\NasabahKreasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\GamificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Notification;

// Route untuk halaman landing
Route::get('/', function () {
    return view('landing');
})->name('landing.page');

// Route untuk Prediksi
Route::post('/predict', [PredictionController::class, 'predict'])->name('predict');

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Check Email Signin
Route::get('/check-email', function (Request $request) {
    $email = $request->query('email');
    $exists = DB::table('nasabah')->where('email', $email)->exists();
    return response()->json(['exists' => $exists]);
});


// Routes untuk fitur akun nasabah
Route::prefix('nasabah')->group(function () {

    // Halaman login nasabah
    Route::get('/login', [AuthController::class, 'showNasabahLoginForm'])->name('login.nasabah');
    Route::post('/login', [AuthController::class, 'submitNasabahLogin'])->name('submit.nasabah');


    // Halaman daftar nasabah
    Route::get('/signin', [AuthController::class, 'showNasabahSigninForm'])->name('signin.nasabah');
    Route::post('/nasabah/signin', [AuthController::class, 'createSignin'])->name('signin.create');


    Route::get('/', function () {
        return view('landing');
    })->name('landing.page');




     // Route untuk Gamification
    Route::get('/rewards', function () {
        $nasabah = Auth::guard('nasabah')->user(); // Gunakan guard nasabah
        if (!$nasabah) {
            return redirect()->route('login.nasabah')->with('error', 'Silakan login untuk melihat hadiah.');
        }

        $points = $nasabah->point->points ?? 0;
        $rewards = \App\Models\Reward::all();

        return view('gamification.rewards', compact('points', 'rewards'));
    })->name('nasabah.rewards');

    Route::post('/redeem-reward', [GamificationController::class, 'redeemReward'])->name('redeem.reward');

    // Route untuk mengunggah kreasi (otomatis tambah poin)
    Route::post('/kreasiku/store', [NasabahKreasiController::class, 'store'])->name('nasabah.kreasi.store');





    // Route untuk profile nasabah
    Route::get('/profile', function () {
        return view('Profile.index');
    })->name('profile.nasabah');
    Route::get('/profile/keamanan', function () {
        return view('Profile.keamanan');
    })->name('profile.keamanan');
    Route::get('/profile/keamanan/ubah-password', function () {
        return view('Profile.editpassword');
    })->name('profile.password');

    // Mengelola foto profil
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.nasabah');
    Route::get('/profile/keamanan', [ProfileController::class, 'showSecurity'])->name('profile.keamanan');
    Route::post('/profile/update-photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');
    Route::post('/profile/delete-photo', [ProfileController::class, 'deletePhoto'])->name('profile.deletePhoto');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    Route::post('/profile/delete-account', [ProfileController::class, 'deleteAccount'])->name('profile.deleteAccount');

    // Route untuk dashboard nasabah
    Route::get('/dashboard', function () {
        return view('Dashboard.dashboard');
    })->name('dashboard.nasabah');


    // Route Notifikasi
    Route::post('/notifications/mark-read', function () {
        Notification::where('read_status', false)->update(['read_status' => true]);
        return back();
    })->name('notifications.mark-read');


    // Route Munculin Artikel Ke Dashboard
    Route::get('/nasabah/dashboard', [DashboardController::class, 'index'])->name('dashboard.nasabah');
    Route::get('/artikel/{id}', [DashboardController::class, 'showArticleDetail'])->name('detail.artikel');


    // Route untuk menampilkan detail kreasi
    Route::get('/artikel-kreasi/{id}', [KreasiController::class, 'show'])->name('artikel.kreasi');


    // Route untuk Kelola Sampah
    Route::get('/kelola-sampah', function () {
        return view('KelolaSampah.kelolasampah');
    })->name('kelola.sampah');


    // Route Kreasi
    Route::put('/kreasi/{id}', [NasabahKreasiController::class, 'update'])->name('kreasi.update');
    Route::delete('/kreasi/{id}', [NasabahKreasiController::class, 'destroy'])->name('kreasi.destroy');
    Route::get('/kreasi', [KreasiController::class, 'index'])->name('kreasi');
    Route::get('/unggah-kreasi', [NasabahKreasiController::class, 'create'])->name('unggah.kreasi');


    // Route untuk artikel kreasi tanpa ID (redirect ke halaman kreasi atau tampilkan pesan)
    Route::get('/artikel-kreasi', function () {
        return redirect()->route('kreasi')->with('error', 'ID Kreasi diperlukan untuk melihat detail.');
    });


    // Route untuk Kreasiku (Hanya kreasi milik nasabah)
    Route::get('/kreasiku', [NasabahKreasiController::class, 'index'])->name('kreasiku');
    Route::get('/kreasiku/edit/{id}', [NasabahKreasiController::class, 'edit'])->name('edit.kreasiku');
    Route::post('/kreasiku/store', [NasabahKreasiController::class, 'store'])->name('nasabah.kreasi.store');


    // Route untuk deteksi sampah
    Route::get('/deteksi', function () {
        return view('Kreasi.deteksi');
    })->name('deteksi.sampah');

    // Route untuk Tentang Kami
    Route::get('/tentang-kami', function () {
        return view('Dashboard.tentangkami');
    })->name('tentang.kami');

    // Route untuk artikel pada dashboard nasabah
    Route::get('/artikel', function () {
        return view('Dashboard.artikel');
    })->name('artikel.nasabah');

});


// Routes untuk login admin
Route::prefix('admin')->group(function () {
    // Menampilkan form login admin
    Route::get('/login', [AuthController::class, 'showAdminLoginForm'])->name('login.admin');

    // Proses login admin
    Route::post('/login', [AuthController::class, 'submitAdminLogin'])->name('submit.admin');
});

// Routes Admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Validasi Kreasi (Pending -> Approve/Reject)
    Route::get('/kreasi/approval', [AdminKreasiApprovalController::class, 'index'])->name('kreasi.approval');
    Route::post('/kreasi/{id}/approve', [AdminKreasiApprovalController::class, 'approve'])->name('kreasi.approve');
    Route::post('/kreasi/{id}/reject', [AdminKreasiApprovalController::class, 'reject'])->name('kreasi.reject');

    // Kategori Sampah
    Route::get('/categories', [AdminKategoriController::class, 'index'])->name('categories.index');
    Route::get('/categories/tambah', [AdminKategoriController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [AdminKategoriController::class, 'store'])->name('categories.store');
    Route::get('/categories/edit/{id}', [AdminKategoriController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/update/{id}', [AdminKategoriController::class, 'update'])->name('categories.update');
    Route::delete('/categories/destroy/{id}', [AdminKategoriController::class, 'destroy'])->name('categories.destroy');

    // Artikel
    Route::get('/articles', [AdminArtikelController::class, 'index'])->name('artikel.index');
    Route::post('/articles/store', [AdminArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/articles/edit/{id}', [AdminArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('/articles/update/{id}', [AdminArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/articles/{id}', [AdminArtikelController::class, 'destroy'])->name('artikel.destroy');
    Route::get('/articles/upload', [AdminUploadArtikelController::class, 'index'])->name('artikel.upload');

    // Kreasi
    Route::get('/kreasi', [AdminKreasiController::class, 'index'])->name('kreasi.index');
    Route::delete('/kreasi/{id}', [AdminKreasiController::class, 'destroy'])->name('kreasi.destroy');

     // Routes untuk Rewards
     Route::get('/rewards', [AdminRewardController::class, 'index'])->name('rewards.index');
    Route::get('/rewards/create', [AdminRewardController::class, 'create'])->name('rewards.create');
    Route::post('/rewards', [AdminRewardController::class, 'store'])->name('rewards.store');
    Route::get('/rewards/{id}/edit', [AdminRewardController::class, 'edit'])->name('rewards.edit');
    Route::put('/rewards/{id}', [AdminRewardController::class, 'update'])->name('rewards.update');
    Route::delete('/rewards/{id}', [AdminRewardController::class, 'destroy'])->name('rewards.destroy');

    // Data Pengguna
    Route::get('/users', [AdminPenggunaController::class, 'index'])->name('datauser.index');
    Route::delete('/users/{id}', [AdminPenggunaController::class, 'destroy'])->name('datauser.destroy');

    // Data Admin
    Route::get('/data-admin', [AdminDataAdminController::class, 'index'])->name('dataadmin.index');
    Route::delete('/data-admin/{id}', [AdminDataAdminController::class, 'destroy'])->name('dataadmin.destroy');
    Route::get('/data-admin/{id}/edit', [AdminDataAdminController::class, 'edit'])->name('dataadmin.edit');
    Route::put('/data-admin/{id}', [AdminDataAdminController::class, 'update'])->name('dataadmin.update');

    // Rewards Routes
    Route::get('/rewards', [AdminRewardController::class, 'index'])->name('rewards.index');
    Route::get('/rewards/create', [AdminRewardController::class, 'create'])->name('rewards.create');
    Route::post('/rewards', [AdminRewardController::class, 'store'])->name('rewards.store');
    Route::get('/rewards/{id}/edit', [AdminRewardController::class, 'edit'])->name('rewards.edit');
    Route::put('/rewards/{id}', [AdminRewardController::class, 'update'])->name('rewards.update');
    Route::delete('/rewards/{id}', [AdminRewardController::class, 'destroy'])->name('rewards.destroy');

});