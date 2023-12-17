<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restoran;

class RestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Restoran::create([
                'nama_restoran' => "Restoran Contoh $i",
                'email' => "restoran$i@example.com",
                'alamat' => "Alamat Contoh $i",
                'no_telp' => "08123456$i",
            ]);
        }
    }
}
