<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    protected $table = "barang_keluar";
    use HasFactory;

    protected $visible = ['id_barang', 'jumlah', 'tgl_keluar', 'id_lokasi', 'jurusan'];
    protected $fillable = ['id_barang', 'jumlah', 'tgl_keluar', 'id_lokasi', 'jurusan'];
    public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang', 'id_barang');
    }
    public function lokasi()
    {
        return $this->belongsTo('App\Models\Lokasi', 'id_lokasi');
    }

}
