<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
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
        $lokasi = Lokasi::all();
        return view('lokasi.index', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lokasi.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lokasi'=>'required',
            'jurusan'=>'required',
        ]);

        $lokasi = new Lokasi;
        $lokasi -> nama_lokasi = $request->nama_lokasi;
        $lokasi -> jurusan = $request->jurusan;
        $lokasi -> save();
        return redirect()->route('lokasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('lokasi.show', compact('lokasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lokasi' => 'required',
            'jurusan' => 'required',
        ]);

        $lokasi = Lokasi::findOrFail($id);
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->jurusan = $request->jurusan;
        $lokasi->save();
        return redirect()->route('lokasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->delete();
        return redirect()->route('lokasi.index');
    }
}
