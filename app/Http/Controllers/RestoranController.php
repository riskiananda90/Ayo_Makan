<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restoran;
use Illuminate\Support\Facades\Redirect;

class RestoranController extends Controller
{
    public function create_restoran(){
        return view('admin/create_restoran');
    }

    public function store_restoran(Request $request){
        $request->validate([
            'nama_restoran' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Restoran::create([
            'nama_restoran' => $request->nama_restoran,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);

        return Redirect::route('create_restoran');
    }  
}
