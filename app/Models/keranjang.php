<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;

    protected $table = "keranjang";

    protected $fillable = [
        'id_user',
        // 'id_pesanan',
        'id_menu',
        'jumlah',
        'total_harga',
    ];

    // public function pesanan()
    // {
    //     return $this->belongsTo(Pesanan::class, 'id_pesanan');
    // }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function user(){
        return $this->belongsTo(user::class, 'id_user');
    }
}