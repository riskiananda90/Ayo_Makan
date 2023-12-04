<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_restoran',
        'id_kategori',
        'nama_menu',
        'harga_menu',
    ];

    public function restoran(){
        return $this->belongsTo(Restoran::class, 'id_restoran');
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class, 'id_menu');
    }
}
