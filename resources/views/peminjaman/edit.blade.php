@extends('admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Peminjaman</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Peminjaman</div>
                <div class="card-body">
                   <form action="{{route('peminjaman.update',$peminjaman->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Peminjam</label>
                            <input type="text" name="peminjam" value="{{$peminjaman->peminjam}}"
                            class="form-control @error('peminjam') is-invalid @enderror">
                             @error('peminjam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
<div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <div class="form-check">
                          <input class="form-check-input" type="radio" name="jk" value="Laki-laki"
                          class="form-control @error('jk') is-invalid @enderror">
                          <label class="form-check-label">Laki-laki</label>
                        @error('jk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
</div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="jk" value="Perempuan"
                          class="form-control @error('jk') is-invalid @enderror">
                          <label class="form-check-label">Perempuan</label>
                          @error('jk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div></div>
                        <div class="form-group">
<label for="">Status</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                          <option value="">-- Pilih Status -- </option>
                          <option value="Siswa">Siswa</option>
                          <option value="Guru">Guru</option>
                          <option value="Karyawan">Karyawan</option>
                          @error('status')
                          <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </select>
                      </div>
<div class="form-group">
                        <label for="">Jurusan</label>
                        <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                          <option value="">-- Pilih Jurusan -- </option>
                          <option value="RPL">RPL</option>
                          <option value="TBSM">TBSM</option>
                          <option value="TKRO">TKRO</option>
                          @error('jurusan')
                          <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </select>
                      </div>
                      <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" name="no_telp" value="{{$peminjaman->no_telp}}"
                            class="form-control @error('no_telp') is-invalid @enderror">
                             @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
<div class="form-group"><br>
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <select name="id_barang" class="form-control @error('id_barang') is-invalid @enderror" >
                                @foreach($barang as $data)
                                    <option value="{{$data->id}}" {{$data->id == $peminjaman->id_barang ? 'selected="selected"' : '' }}>{{$data->nama_barang}}</option>
                                @endforeach
                            </select>
                            @error('id_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="jumlah" value="{{$peminjaman->jumlah}}"
                            class="form-control @error('jumlah') is-invalid @enderror">
                             @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pengelola</label>
                            <select name="id_users" class="form-control @error('id_users') is-invalid @enderror" >
                                @foreach($users as $data)
                                    <option value="{{$data->id}}" {{$data->id == $peminjaman->id_users ? 'selected="selected"' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error('id_users')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" value="{{$peminjaman->tgl_pinjam}}"
                            class="form-control @error('tgl_pinjam') is-invalid @enderror">
                             @error('tgl_pinjam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" value="{{$peminjaman->tgl_kembali}}"
                            class="form-control @error('tgl_kembali') is-invalid @enderror">
                             @error('tgl_kembali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
<br>

                        <div class="form-group">
                        <button type="reset" class="btn btn-outline-warning"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
</svg>   Reset</button>
                            <button type="submit" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>   Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
