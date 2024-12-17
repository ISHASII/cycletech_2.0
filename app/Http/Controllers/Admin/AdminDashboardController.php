<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\Kreasi;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Menghitung total data
        $totalPengguna = Nasabah::count();
        $totalKreasi = Kreasi::count();

        // Mengirim data ke tampilan
        return view('Admin.dashboard.index', compact('totalPengguna', 'totalKreasi'));
    }
}