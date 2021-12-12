@extends('admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Barang</h1>
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
                <div class="card-header">Data Barang</div>
                <div class="card-body">
                   <form action="{{route('barang.update',$barang->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{$barang->nama_barang}}"
                            class="form-control @error('nama_barang') is-invalid @enderror">
                             @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="number" name="stok" value="{{$barang->stok}}"
                            class="form-control @error('stok') is-invalid @enderror">
                             @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" value="{{$barang->tgl_masuk}}"
                            class="form-control @error('tgl_masuk') is-invalid @enderror">
                             @error('tgl_masuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kondisi</label>
                            <div class="form-check">
                          <input class="form-check-input" type="radio" name="kondisi" value="Baik"
                          class="form-control @error('kondisi') is-invalid @enderror">
                          <label class="form-check-label">Baik</label>
                        @error('kondisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
</div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="kondisi" value="Buruk"
                          class="form-control @error('kondisi') is-invalid @enderror">
                          <label class="form-check-label">Buruk</label>
                          @error('kondisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div></div>
                        <div class="form-group">
                        <label for="">Status</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" value="Dipinjam"
                          class="form-control @error('status') is-invalid @enderror">
                          <label class="form-check-label">Dipinjam</label>
                          @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Lokasi</label>
                            <select name="id_lokasi" class="form-control @error('id_lokasi') is-invalid @enderror" >
                                @foreach($lokasi as $data)
                                    <option value="{{$data->id}}" {{$data->id == $barang->id_lokasi ? 'selected="selected"' : '' }}>{{$data->nama_lokasi}}</option>
                                @endforeach
                            </select>
                            @error('id_lokasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
