<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSampah extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'kategori_sampah';

    // Kolom yang bisa diisi secara massal
    protected $fillable = ['kategori'];
}