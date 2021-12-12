<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = "peminjaman";
    use HasFactory;

    protected $visible = ['peminjam', 'jk', 'status', 'no_telp', 'id_barang', 'jumlah', 'id_users', 'tgl_pinjam', 'tgl_kembali', 'jurusan'];
    protected $fillable = ['peminjam', 'jk', 'status', 'no_telp', 'id_barang', 'jumlah', 'id_users', 'tgl_pinjam', 'tgl_kembali', 'jurusan'];
    public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang', 'id_barang');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'id_users');
    }
}
