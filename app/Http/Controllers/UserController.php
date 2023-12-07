<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create_user(){
        return view('admin/create_user');
    }

    public function store_user(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            // 'alamat' => 'required',
            // 'no_telp' => 'required',
            // 'role' => 'required',
            'password' => 'required|min:8'
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            // 'alamat' => $request->alamat,
            // 'no_telp' => $request->no_telp,
            // 'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);

        return Redirect::route('create_user')->with('success', 'User berhasil dibuat');
    } 

    public function index_user(){
        $user = User::all();
        return view('admin/index_user', compact('user'));
    }

    public function show_user(user $user){
        return view('admin/show_user', compact('user'));
    }

    public function edit_user(user $user){
        return view('admin/edit_user', compact('user'));
    }

    public function update_user(user $user, Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            // 'alamat' => 'required',
            // 'no_telp' => 'required',
            // 'role' => 'required',
            'password' => 'required|min:8'
        ]);

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            // 'alamat' => $request->alamat,
            // 'no_telp' => $request->no_telp,
            // 'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);

        return redirect::route('show_user', $user);
    }

    public function delete_user(user $user){
        $user->delete();
        return redirect::route('index_user');
    }
}
