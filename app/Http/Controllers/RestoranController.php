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

    public function index_restoran(){
        $restoran = restoran::all();
        return view('admin/index_restoran', compact('restoran'));
    }

    public function show_restoran(restoran $restoran){
        return view('admin/show_restoran', compact('restoran'));
    }

    public function edit_restoran(restoran $restoran){
        return view('admin/edit_restoran', compact('restoran'));
    }

    public function update_restoran(restoran $restoran, Request $request){
        $request->validate([
            'nama_restoran' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $restoran->update([
            'nama_restoran' => $request->nama_restoran,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);

        return redirect::route('show_restoran', $restoran);
    }

    public function delete_restoran(restoran $restoran){
        $restoran->delete();
        return redirect::route('index_restoran');
    }
}
