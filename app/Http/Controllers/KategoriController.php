<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    public function create_kategori(){
        $showKategori = kategori::all();
        return view('admin/create_kategori');
    }

    public function store_kategori (Request $request){
        $request->validate([
            'nama_kategori' => 'required',

        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return Redirect::route('create_kategori');
    }  

}
