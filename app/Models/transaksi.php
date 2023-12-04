<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pesanan',
        'id_metode_pembayaran',
        'total_pembayaran',
        'tanggal_transaksi',
    ];

    public function pesanan()
    {
        return $this->belongsTo(pesanan::class, 'id_pesanan');
    }

    public function metode_pembayaran()
    {
        return $this->belongsTo(metode_pembayaran::class, 'id_metode_pembayaran');
    }
}
