<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\pesanan;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function checkout(){

        $id_user = Auth::id();
        $keranjang = keranjang::where('id_user', $id_user)->get();

    if($keranjang == null){
        return redirect::back();
    }

    $pesanan = pesanan::create([
        'id_user' => $id_user;
    ]);

    foreach($keranjang as $keranjang){
        transaksi::create([
            'jumlah' => $keranjang->jumlah,
            'id_pesanan' => $pesanan->id,
            'id_menu' => $keranjang->id_menu
        ]);
    }
    
    return Redirect::back();
}
}
