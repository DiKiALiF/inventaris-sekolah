<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama_barang'=>'Mouse','stok'=>175, 'tgl_masuk'=>'2021-11-20','kondisi'=>'Baik','status'=>'Dipinjam','id_lokasi'=>1,'jurusan'=>'RPL'],
            ['nama_barang'=>'Keyboard','stok'=>180,'tgl_masuk'=>'2021-11-20','kondisi'=>'Baik','status'=>'Dipinjam','id_lokasi'=>1,'jurusan'=>'RPL'],
            ['nama_barang'=>'Monitor','stok'=>185,'tgl_masuk'=>'2021-11-20','kondisi'=>'Baik','status'=>'Dipinjam','id_lokasi'=>1,'jurusan'=>'RPL'],
            ['nama_barang'=>'Laptop','stok'=>150,'tgl_masuk'=>'2021-11-20','kondisi'=>'Baik','status'=>'Dipinjam','id_lokasi'=>1,'jurusan'=>'RPL']
            ];
            // masukkan data ke database
            DB::table('barang')->insert($barang);
    }
}
