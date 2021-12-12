<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::with('lokasi')->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        return view('barang.create', compact('lokasi'));
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
            'nama_barang' => 'required',
            'stok' => 'required',
            'tgl_masuk' => 'required',
            'kondisi' => 'required',
            'status',
            'id_lokasi' => 'required',
            'jurusan' => 'required',
        ]);

        $barang = new Barang;
        $barang-> nama_barang = $request->nama_barang;
        $barang-> stok = $request->stok;
        $barang-> tgl_masuk = $request->tgl_masuk;
        $barang-> kondisi = $request->kondisi;
        $barang-> status = $request->status;
        $barang-> id_lokasi = $request->id_lokasi;
        $barang-> jurusan = $request->jurusan;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        $lokasi = Lokasi::all();
        return view('barang.show', compact('barang', 'lokasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $lokasi = Lokasi::all();
        return view('barang.edit', compact('barang', 'lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required',
            'tgl_masuk' => 'required',
            'kondisi' => 'required',
            'status',
            'id_lokasi' => 'required',
            'jurusan' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang-> nama_barang = $request->nama_barang;
        $barang-> stok = $request->stok;
        $barang-> tgl_masuk = $request->tgl_masuk;
        $barang-> kondisi = $request->kondisi;
        $barang-> status = $request->status;
        $barang-> id_lokasi = $request->id_lokasi;
        $barang-> jurusan = $request->jurusan;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
