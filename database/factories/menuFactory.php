<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Restoran;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $restoran = Restoran::inRandomOrder()->first();
        $kategori = Kategori::inRandomOrder()->first();

        // Menggunakan Faker untuk mendapatkan nama file gambar secara acak
        $imageFileName = $this->faker->image('public/assets/image', 400, 300, null, false);

        return [
            'id_restoran' => $restoran->id,
            'id_kategori' => $kategori->id,
            'nama_menu' => $this->faker->unique()->words(3, true),
            'harga_menu' => $this->faker->numberBetween(1, 100),
            'deskripsi' => $this->faker->sentence,
            'image' => 'assets/image' . $imageFileName, 
        ];
    }
}
