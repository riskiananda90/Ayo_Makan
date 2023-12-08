<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Models\Menu;
use App\Models\restoran;
use App\Models\kategori;


class MenuController extends Controller
{
    public function create_menu()
    {
        $restoran = Restoran::all();
        $kategori = kategori::all();
        return view('admin/create_menu', compact('restoran', 'kategori'));
    }

    public function store_menu(Request $request, restoran $restoran, kategori $kategori)
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'deskripsi' => 'required',
            'image' => 'required',
            'id_restoran' => 'required',
            'id_kategori' => 'required',
        ]);

        $file = $request->file('image');
        $path = time() . '_' . $request->nama_menu . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        $id_restoran = $request->input('id_restoran');
        $id_kategori = $request->input('id_kategori');

        Menu::create([
            'id_restoran' => $id_restoran,
            'id_kategori' => $id_kategori,
            'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga_menu,
            'deskripsi' => $request->deskripsi,
            'image' => $path,
        ]);

        return redirect()->route('create_menu', compact('restoran', 'kategori'));
    }


    public function index_menu()
    {
        $menu = Menu::all();
        return view('admin/index_menu', compact('menu'));
    }

    public function show_menu(menu $menu, restoran $restoran, kategori $kategori)
    {
        return view('admin/show_menu', compact('menu', 'restoran', 'kategori'));
    }

    public function edit_menu(menu $menu, restoran $restoran, kategori $kategori)
    {
        $restoran = Restoran::all();
        $kategori = Kategori::all();

        return view('admin/edit_menu', compact('menu', 'restoran', 'kategori'));
    }

    public function update_menu(menu $menu, Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'deskripsi' => 'required',
            'id_restoran' => 'required',
            'id_kategori' => 'required',
        ]);

        $file = $request->file('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = time() . '_' . $request->nama_menu . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('public/' . $path, file_get_contents($file));
        } else {
            $path = $menu->image;
        }

        $id_restoran = $request->input('id_restoran');
        $id_kategori = $request->input('id_kategori');

        $menu->update([
            'id_restoran' => $id_restoran,
            'id_kategori' => $id_kategori,
            'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga_menu,
            'deskripsi' => $request->deskripsi,
            'image' => $path,
        ]);

        $restoran = $menu->restoran;
        $kategori = $menu->kategori;

        return redirect()->route('show_menu', compact('restoran', 'kategori', 'menu'));
    }



    public function delete_menu(menu $menu)
    {
        $menu->delete();
        return redirect::route('index_menu');
    }
}
