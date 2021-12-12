<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PeminjamanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peminjaman = [
            ['peminjam'=>'Ujang','jk'=>'Laki-laki','status'=>'Siswa',  'jurusan'=>'RPL', 'no_telp'=>'089659317206', 'id_barang'=>1, 'jumlah'=>10, 'id_users'=>1, 'tgl_pinjam'=>'2021-11-21', 'tgl_kembali'=>'2021-11-25'],
            ['peminjam'=>'Juned','jk'=>'Laki-laki','status'=>'Siswa', 'jurusan'=>'RPL', 'no_telp'=>'081659317205', 'id_barang'=>2,'jumlah'=>5, 'id_users'=>1, 'tgl_pinjam'=>'2021-11-21', 'tgl_kembali'=>'2021-11-25'],
            ['peminjam'=>'Maman','jk'=>'Laki-laki','status'=>'Siswa', 'jurusan'=>'RPL', 'no_telp'=>'085659317204', 'id_barang'=>3,'jumlah'=>2,'id_users'=>1, 'tgl_pinjam'=>'2021-11-21', 'tgl_kembali'=>'2021-11-25'],
            ['peminjam'=>'Kuproy','jk'=>'Laki-laki','status'=>'Siswa', 'jurusan'=>'RPL', 'no_telp'=>'089659317203', 'id_barang'=>4,'jumlah'=>20,'id_users'=>1, 'tgl_pinjam'=>'2021-11-21', 'tgl_kembali'=>'2021-11-25']
            ];
            // masukkan data ke database
            DB::table('peminjaman')->insert($peminjaman);
    }
}
