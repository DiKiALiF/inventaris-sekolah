<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";

    protected $visible = ['nama_barang', 'stok', 'tgl_masuk', 'kondisi', 'status', 'id_lokasi', 'jurusan'];
    protected $fillable = ['nama_barang', 'stok', 'tgl_masuk', 'kondisi', 'status', 'id_lokasi', 'jurusan'];
    public $timestamps = true;

    public function barang_keluar()
    {
        $this->hasMany('App\Models\Barang_keluar', 'id_barang');
    }

    public function peminjaman()
    {
        $this->hasMany('App\Models\Peminjaman', 'id_barang');
    }

    public function lokasi()
    {
        return $this->belongsTo('App\Models\Lokasi', 'id_lokasi');
    }

}
