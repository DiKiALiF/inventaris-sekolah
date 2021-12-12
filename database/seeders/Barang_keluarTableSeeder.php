<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Barang_keluarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang_keluar = [
            ['id_barang'=>1,'jumlah'=>5, 'tgl_keluar'=>'2021-11-26','id_lokasi'=>1,'jurusan'=>'RPL'],
            ['id_barang'=>2,'jumlah'=>10,'tgl_keluar'=>'2021-11-26','id_lokasi'=>1,'jurusan'=>'RPL'],
            ['id_barang'=>3,'jumlah'=>15,'tgl_keluar'=>'2021-11-26','id_lokasi'=>1,'jurusan'=>'RPL'],
            ['id_barang'=>4,'jumlah'=>5,'tgl_keluar'=>'2021-11-26','id_lokasi'=>1,'jurusan'=>'RPL']
            ];
            // masukkan data ke database
            DB::table('barang_keluar')->insert($barang_keluar);
    }
}
