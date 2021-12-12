<?php

namespace App\Http\Controllers;

use App\Models\Barang_keluar;
use App\Models\Barang;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_keluar = Barang_keluar::with('barang', 'lokasi')->get();
        return view('barang_keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $lokasi = Lokasi::all();
        return view('barang_keluar.create', compact('barang', 'lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'jumlah' => 'required',
            'tgl_keluar' => 'required',
            'id_lokasi' => 'required',
            'jurusan' => 'required',
        ]);

        $barang_keluar = new Barang_keluar;
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->jumlah = $request->jumlah;
        $barang_keluar->tgl_keluar = $request->tgl_keluar;
        $barang_keluar->id_lokasi = $request->id_lokasi;
        $barang_keluar->jurusan = $request->jurusan;
        $barang_keluar->save();

        $barang = Barang::findOrFail($request->id_barang);
        $barang->stok -= $request->jumlah;
        $barang->save();

        return redirect()->route('barang_keluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang_keluar = Barang_keluar::findOrFail($id);
        $barang = Barang::all();
        $lokasi = Lokasi::all();
        return view('barang_keluar.show', compact('barang_keluar', 'barang', 'lokasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang_keluar = Barang_keluar::findOrFail($id);
        $barang = Barang::all();
        $lokasi = Lokasi::all();
        return view('barang_keluar.edit', compact('barang_keluar', 'barang', 'lokasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required',
            'jumlah' => 'required',
            'tgl_keluar' => 'required',
            'id_lokasi' => 'required',
            'jurusan' => 'required',
        ]);

        $barang_keluar = Barang_keluar::findOrFail($id);
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->jumlah = $request->jumlah;
        $barang_keluar->tgl_keluar = $request->tgl_keluar;
        $barang_keluar->id_lokasi = $request->id_lokasi;
        $barang_keluar->jurusan = $request->jurusan;
        $barang_keluar->save();
        return redirect()->route('barang_keluar.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang_keluar = Barang_keluar::findOrFail($id);
        $barang_keluar->delete();
        return redirect()->route('barang_keluar.index');
    }
}
