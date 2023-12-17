<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_restoran',
        'waktu_pemesanan',
        'status_pemesanan',
    ];

    protected $with = ['users','restoran'];

    public function users(){
        return $this->belongsTo(user::class, 'id_user');
    }

    public function restoran(){
        return $this->belongsTo(restoran::class, 'id_restoran');
    }

    public function transaksi(){
        return $this->hasOne(Transaksi::class, 'id_pesanan');
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class, 'id_pesanan');
    }

    public function ratings(){
        return $this->hasMany(Rating::class, 'id_pesanan');
    }
}
