<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $table = "lokasi";

    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nama_lokasi', 'jurusan'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nama_lokasi', 'jurusan'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    // membuat relasi one to many
    public function barang()
    {
        $this->hasMany('App\Models\Barang', 'id_lokasi');
}
public function barang_keluar()
{
    $this->hasMany('App\Models\Barang_keluar', 'id_lokasi');
}
}
