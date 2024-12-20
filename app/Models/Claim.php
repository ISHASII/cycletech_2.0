<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $fillable = [
        'nasabah_id',
        'reward_id',
        'address',
        'status',
    ];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }

    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }
}