<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metode_pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_metode_pembayaran'
    ];

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'id_metode_pembayaran');
    }
}
