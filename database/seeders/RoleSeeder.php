<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete existing records
        Role::query()->delete();

        // Insert seed data
        Role::create(['role' => 'admin']);   // id 1
        Role::create(['role' => 'restoran']); // id 2
        Role::create(['role' => 'user']);     // id 3
    }
}
