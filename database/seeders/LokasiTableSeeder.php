<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class LokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lokasi = [
            ['nama_lokasi'=>'Lab 1','jurusan'=>'RPL'],
            ['nama_lokasi'=>'Lab 2','jurusan'=>'RPL'],
            ['nama_lokasi'=>'Lab 3','jurusan'=>'RPL'],
            ['nama_lokasi'=>'Gudang','jurusan'=>'RPL']
            ];
            // masukkan data ke database
            DB::table('lokasi')->insert($lokasi);
    }
}
