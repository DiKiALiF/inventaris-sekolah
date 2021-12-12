<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(LokasiTableSeeder::class);
        $this->call(BarangTableSeeder::class);
        $this->call(Barang_keluarTableSeeder::class);
        $this->call(PeminjamanTableSeeder::class);
    }
}
