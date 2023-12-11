<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\keranjang;

class KeranjangController extends Controller
{
    // Metode untuk menampilkan keranjang belanja
    public function index()
    {
        $keranjang = Keranjang::with(['pesanan', 'menu'])->get();

        return view('cart', compact('keranjang'));
    }

    // Metode untuk menambahkan item ke keranjang belanja
    public function addToKeranjang(Request $request)
    {
        // Lakukan validasi request sesuai kebutuhan

        Keranjang::create([
            'id_pesanan' => $request->input('id_pesanan'),
            'id_menu' => $request->input('id_menu'),
            'jumlah' => $request->input('jumlah'),
            'total_harga' => $request->input('total_harga'),
        ]);

        return redirect()->route('cart')->with('success', 'Item berhasil ditambahkan ke keranjang.');
    }

    public function updateJumlahKeranjang(Request $request, $id)
    {
        // Lakukan validasi request sesuai kebutuhan
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->update([
            'jumlah' => $request->input('jumlah'),
            'total_harga' => $request->input('total_harga'),
        ]);

        return redirect()->route('keranjang.index')->with('success', 'Jumlah item berhasil diperbarui di keranjang.');
    }

    // Metode untuk menghapus item dari keranjang belanja
    public function removeFromKeranjang($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return redirect()->route('cart')->with('success', 'Item berhasil dihapus dari keranjang.');
    }
}
