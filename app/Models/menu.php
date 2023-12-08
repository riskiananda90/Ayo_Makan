<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = "menu";

    protected $fillable = [
        'id_restoran',
        'id_kategori',
        'nama_menu',
        'harga_menu',
        'deskripsi',
        'image'
    ];

    public function restoran(){
        return $this->belongsTo(Restoran::class, 'id_restoran', 'id');
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class, 'id_menu', 'id');
    }
}
