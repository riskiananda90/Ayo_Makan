<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restoran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_restoran',
        'email',
        'alamat',
        'no_telp',
    ];

   protected $casts = [
       'email_verified_at' => 'datetime',
   ];

   public function menu(){
        return $this->hasMany(Menu::class, 'id_restoran');
    }

    public function pesanan(){
        return $this->hasMany(Pesanan::class, 'id_restoran');
    }

    public function ratings(){
        return $this->hasMany(Rating::class, 'id_restoran');
    }
}
