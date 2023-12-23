<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete existing records
        User::query()->delete();

        // Insert seed data
        User::create([
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'alamat' => 'admin address',
            'no_telp' => '08211111',
            'role_id' => 1,
        ]);

        User::create([
            'nama' => 'restoran',
            'email' => 'restoran@restoran.com',
            'password' => Hash::make('password'),
            'alamat' => 'restoran address',
            'no_telp' => '0821382323',
            'role_id' => 2,
        ]);

        User::create([
            'nama' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'alamat' => 'user address',
            'no_telp' => '021832372',
            'role_id' => 3,
        ]);
    }
}
