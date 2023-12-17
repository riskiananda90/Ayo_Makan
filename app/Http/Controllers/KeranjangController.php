<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\menu;
// use App\Models\pesanan;
use App\Models\keranjang;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;

class KeranjangController extends Controller
{

    public function index()
    {
        $keranjang = Keranjang::with('menu')->where('id_user', auth()->id())->get();
        $totalHarga = $keranjang->sum('total_harga');

        return view('layouts.partials.navbar', compact('keranjang', 'totalHarga'));
    }


    public function tambah_keranjang(Request $request, menu $menu)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:1',
            'total_harga' => 'required|numeric|min:0',
        ]);

        $id_user = Auth::id();
        $id_menu = $menu->id;

        // Periksa apakah item sudah ada dalam keranjang
        $keranjangItem = Keranjang::where('id_user', $id_user)
            ->where('id_menu', $id_menu)
            ->first();

        if ($keranjangItem) {
            // Jika sudah ada, tambahkan jumlahnya
            $keranjangItem->update([
                'jumlah' => $keranjangItem->jumlah + $request->input('jumlah'),
                'total_harga' => $keranjangItem->total_harga + ($menu->harga_menu * $request->input('jumlah')),
            ]);
        } else {
            // Jika belum ada, buat item baru dalam keranjang
            Keranjang::create([
                'id_user' => $id_user,
                'id_menu' => $id_menu,
                'jumlah' => $request->input('jumlah'),
                'total_harga' => $menu->harga_menu * $request->input('jumlah'),
            ]);
        }
        return response()->json(['success' => 'Menu berhasil ditambahkan ke keranjang.']);
    }

    public function hapus_keranjang(Request $request, $id)
    {
        $keranjangItem = Keranjang::find($id);

        if (!$keranjangItem) {
            return Response::json(['error' => 'Item keranjang tidak ditemukan.'], 404);
        }

        // Hapus item keranjang
        $keranjangItem->delete();

        return Response::json(['success' => 'Item keranjang berhasil dihapus.']);
    }

    public function update_keranjang(Request $request, $id, $keranjangChange)
    {
        $keranjangItem = Keranjang::find($id);
    
        if (!$keranjangItem) {
            return response()->json(['error' => 'Item keranjang tidak ditemukan.'], 404);
        }
    
        $keranjangItem->update([
            'jumlah' => max(1, $keranjangItem->jumlah + $keranjangChange),
            'total_harga' => $keranjangItem->menu->harga_menu * ($keranjangItem->jumlah + $keranjangChange),
        ]);
    
        // Kembalikan data terkini keranjang
        return response()->json(['success' => 'Keranjang berhasil diperbarui', 'data' => $this->getCartData()]);
    }
    

    public function delete_item(Request $request, $id)
    {
        $keranjangItem = Keranjang::find($id);

        if (!$keranjangItem) {
            return response()->json(['error' => 'Item keranjang tidak ditemukan.'], 404);
        }

        $keranjangItem->delete();

        // Kembalikan data terkini keranjang
        return response()->json(['success' => 'Item keranjang berhasil dihapus', 'data' => $this->getCartData()]);
    }

    // Fungsi untuk mendapatkan data terkini keranjang
    protected function getCartData()
    {
        $keranjang = Keranjang::with('menu')->where('id_user', auth()->id())->get();
        $totalHarga = $keranjang->sum('total_harga');

        return [
            'keranjang' => $keranjang,
            'totalHarga' => $totalHarga,
        ];
    }
}
