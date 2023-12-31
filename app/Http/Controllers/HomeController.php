<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\menu;
use App\Models\restoran;
use App\Models\keranjang;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $showKategori = Kategori::paginate(8);
        $menu = menu::inRandomOrder()->paginate(6);

        // Menambahkan array nama gambar ke setiap objek kategori
        foreach ($showKategori as $kategori) {
            $kategori->gambar = $this->getGambar($kategori->nama_kategori);
        }

        return view('index', compact('showKategori', 'menu'));
    }

    private function getGambar($kategoriNama)
    {
        // Menyusun array asosiatif kategori ke gambar
        $gambarMapping = [
            'Bakso' => 'bakso1.jpeg',
            'Nasi Goreng' => 'nasi_goreng.jpeg',
            'Roti & Kue' => 'kue.jpeg',
            'Sate' => 'sate.jpeg',
            'Nasi Padang' => 'nasi_padang.jpeg',
            'Nasi Uduk' => 'nasi_uduk.jpeg',
            'Soto' => 'soto.jpeg',
            'Lontong Sayur' => 'lontong.jpeg',
            'Mie Goreng' => 'mie_goreng.jpeg',
            'Es Campur' => 'es_campur.jpeg',
        ];

        // Mengembalikan nama gambar sesuai dengan nama kategori
        return asset('assets/image/' . ($gambarMapping[$kategoriNama] ?? 'default_image.jpg'));
    }

    public function produk($id)
    {
        // Ambil data restoran berdasarkan $id (bisa saja $id adalah ID kategori)
        $restoran = Restoran::find($id);

        // Ambil kategori-kategori terkait dengan restoran atau kategori utama
        $kategori = Kategori::find($id);

        // Ambil menu-menu terkait dengan restoran atau kategori
        $menu = Menu::inRandomOrder()->get()->groupBy('id_kategori');

        return view('produk', [
            'restoran' => $restoran,
            'kategori' => $kategori,
            'menu' => $menu,
        ]);
    }

    public function showMenuDetail(Request $request, $id_menu)
    {
        $nama_menu = $request->get('nama_menu');
        $gambar_menu = $request->get('gambar_menu');

        return view('pemesanan', [
            'nama_menu' => $nama_menu,
            'gambar_menu' => $gambar_menu,
        ]);
    }


    public function showPemesanan($id, $id_menu)
    {
        // Ambil data restoran berdasarkan $id
        $restoran = Restoran::find($id);

        // Ambil kategori-kategori terkait dengan restoran
        $kategori = Kategori::find($id);

        // Ambil informasi menu berdasarkan $id_menu
        $menuTerpilih = Menu::find($id_menu);

        // Ambil menu-menu terkait dengan restoran dan kelompokkannya berdasarkan kategori
        $menu = Menu::where('id_restoran', $id)
            ->where('id_kategori', $kategori->id)
            ->get()
            ->groupBy('id_kategori');


        // Ambil data keranjang berdasarkan user yang sedang login
        $keranjang = Keranjang::where('id_user', auth()->id())->get();

        // Hitung total harga dari data keranjang
        $totalHarga = $keranjang->sum('total_harga');

        // Kirim data ke view pemesanan.blade.php
        return view('pemesanan', [
            'restoran' => $restoran,
            'menu' => $menu,
            'kategori' => $kategori,
            'menuTerpilih' => $menuTerpilih,
            'keranjang' => $keranjang,
            'totalHarga' => $totalHarga,
        ]);
    }



    public function getMoreMenu($idRestoran, $idKategori, $jumlahMenuTampil)
    {
        // Ambil menu tambahan dari database berdasarkan restoran, kategori, dan jumlah menu yang sudah ditampilkan
        $menuTambahan = Menu::where('id_restoran', $idRestoran)
            ->where('id_kategori', $idKategori)
            ->skip($jumlahMenuTampil)
            ->take(3)
            ->get();

        // Kembalikan HTML menu tambahan
        $html = view('layouts.partials.menu', ['menu' => $menuTambahan])->render();

        // Kirim respons JSON dengan HTML menu tambahan dan jumlah menu tambahan
        return response()->json(['html' => $html, 'count' => count($menuTambahan)]);
    }

    public function checkMoreMenu($kategoriId, $jumlahMenuTampil)
    {
        // Ambil jumlah menu tambahan yang tersedia di database
        $jumlahMenuTersedia = Menu::where('id_kategori', $kategoriId)->count();

        // Hitung jumlah menu yang sudah ditampilkan
        $jumlahMenuTampil = intval($jumlahMenuTampil);

        // Tentukan apakah masih ada menu tambahan
        $adaMenuTambahan = $jumlahMenuTampil < $jumlahMenuTersedia;

        return Response::json(['ada_menu_tambahan' => $adaMenuTambahan]);
    }
}
