<?php

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriNames = [
            'Martabak',
            'Serabi',
            'Pisang Goreng',
            'Sop Buntut',
            'Es Campur',
            'Teh Tarik',
            'Kopi Tubruk',
            'Jus Alpukat',
            'Es Doger',
            'Wedang Jahe',
            'Cendol',
            'Bir',
            'Soda Gembira',
            'Sari Asem',
            'Air Kelapa',
            'Bajigur',
            'Bandrek',
        ];

        foreach ($kategoriNames as $name) {
            Kategori::create(['nama_kategori' => $name]);
        }
    }
}
