<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::with('barang', 'users')->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $users = User::all();
        return view('peminjaman.create', compact('barang', 'users'));

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
            'peminjam' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'jurusan' => 'required',
            'no_telp' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'id_users' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->peminjam = $request->peminjam;
        $peminjaman->jk = $request->jk;
        $peminjaman->status = $request->status;
        $peminjaman->jurusan = $request->jurusan;
        $peminjaman->no_telp = $request->no_telp;
        $peminjaman->id_barang = $request->id_barang;
        $peminjaman->jumlah = $request->jumlah;
        $peminjaman->id_users = $request->id_users;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->save();

        $barang = Barang::findOrFail($request->id_barang);
        $barang->stok -= $request->jumlah;
        $barang->save();

        return redirect()->route('peminjaman.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $barang = Barang::all();
        $users = User::all();
        return view('peminjaman.show', compact('peminjaman', 'barang', 'users'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $barang = Barang::all();
        $users = User::all();
        return view('peminjaman.edit', compact('peminjaman', 'barang', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'peminjam' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'jurusan' => 'required',
            'no_telp' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'id_users' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->peminjam = $request->peminjam;
        $peminjaman->jk = $request->jk;
        $peminjaman->status = $request->status;
        $peminjaman->jurusan = $request->jurusan;
        $peminjaman->no_telp = $request->no_telp;
        $peminjaman->id_barang = $request->id_barang;
        $peminjaman->jumlah = $request->jumlah;
        $peminjaman->id_users = $request->id_users;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->save();

        return redirect()->route('peminjaman.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');

    }
}
