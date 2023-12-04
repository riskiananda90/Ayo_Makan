<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users',
        'id_restoran',
        'id_pesanan',
        'komentar',
        'rating',
        'tanggal_rating',
    ];

    public function users(){
        return $this->belongsTo(users::class, 'id_users');
    }

    public function restoran(){
        return $this->belongsTo(Restoran::class, 'id_restoran');
    }

    public function pesanan(){
        return $this->belongsTo(pemesanan::class, 'id_pesanan');
    }
}
