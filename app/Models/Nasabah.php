<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Nasabah extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel di database
    protected $table = 'nasabah'; // Nama tabel di database

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'photo',
        'password_plaintext',
    ];

    // Kolom-kolom yang harus disembunyikan saat serialisasi
    protected $hidden = [
        'password',
        'password_plaintext',
        'remember_token',
    ];

    // Kolom-kolom dengan tipe data khusus
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relasi ke tabel points
     */
    public function point()
    {
        return $this->hasOne(Point::class, 'nasabah_id'); // 'nasabah_id' adalah foreign key di tabel points
    }
}