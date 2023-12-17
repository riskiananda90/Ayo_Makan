<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Restoran;
use App\Models\Kategori;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat 50 entri menu
        for ($i = 0; $i < 300; $i++) {
            $this->createMenu();
        }
    }

    private function createMenu()
    {
        $restoran = Restoran::inRandomOrder()->first();
        $kategori = Kategori::inRandomOrder()->first();

        // Menggunakan gambar yang sudah ada di dalam direktori public/assets/image
        $imageFileName = $this->getRandomImageFileName();

        $menu = new Menu();
        $menu->id_restoran = $restoran->id;
        $menu->id_kategori = $kategori->id;
        $menu->nama_menu = 'Menu ' . $kategori->nama_kategori . ' ' . uniqid();
        $menu->harga_menu = rand(1, 100);
        $menu->deskripsi = 'Deskripsi menu ' . $kategori->nama_kategori . ' ' . uniqid();
        // Simpan file gambar ke dalam folder storage
        $imagePath = $this->saveImageToStorage($imageFileName);

        // Update kolom image di dalam database dengan path ke file di storage
        $menu->image = $imagePath;

        // Simpan informasi menu ke dalam database
        $menu->save();
    }

    private function getRandomImageFileName()
    {
        // Mendapatkan daftar file gambar yang sudah ada di dalam direktori public/assets/image
        $imageFiles = File::files(public_path('assets/image'));

        // Memilih nama file gambar secara acak dari daftar file yang ada
        $randomImage = $imageFiles[array_rand($imageFiles)];

        // Mendapatkan nama file gambar tanpa path
        $imageFileName = pathinfo($randomImage)['basename'];

        return $imageFileName;
    }

    private function saveImageToStorage($imageFileName)
    {
        // Baca konten file gambar
        $imageContent = file_get_contents(public_path('assets/image/' . $imageFileName));

        // Simpan file gambar ke dalam folder storage/app/assets/image
        $imagePath = $imageFileName;
        Storage::put("$imagePath", $imageContent);

        return $imagePath;
    }
}
