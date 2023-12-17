<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    public function create_kategori(){
        $showKategori = kategori::all();
        return view('admin/create_kategori', ['showKategori' => $showKategori]);
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

    public function index_kategori(){
        $kategori = Kategori::all();
        return view('admin/index_kategori', compact('kategori'));
    }

    public function show_kategori(kategori $kategori){
        return view('admin/show_kategori', compact('kategori'));
    }

    public function edit_kategori(kategori $kategori){
        return view('admin/edit_kategori', compact('kategori'));
    }

    public function update_kategori(kategori $kategori, Request $request){
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect::route('show_kategori', $kategori);
    }

    public function delete_kategori(kategori $kategori){
        $kategori->delete();
        return redirect::route('index_kategori');
    }
}
