<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kreasi extends Model
{
    use HasFactory;

    protected $table = 'kreasis'; // Nama tabel di database
    protected $primaryKey = 'id'; // Kolom ID di tabel
    public $timestamps = true; // Gunakan created_at dan updated_at
    protected $fillable = [
        'judul_kreasi',
        'kategori_kreasi',
        'tanggal',
        'alat_bahan',
        'langkah',
        'foto_kreasi',
        'author',
        'status', // Tambahkan status
    ];

    // Relasi ke user yang membuat kreasi
    public function user()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'author', 'name');
    }

    // Relasi ke kategori (opsional jika ada)
    public function kategori()
    {
        return $this->belongsTo(KategoriSampah::class, 'kategori_kreasi', 'id');
    }
}