@extends('admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Lokasi</h1>
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
                <div class="card-header">Data Lokasi</div>
                <div class="card-body">
                   <form action="{{route('lokasi.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Lokasi</label>
                            <input type="text" name="nama_lokasi" class="form-control @error('nama_lokasi') is-invalid @enderror">
                             @error('nama_lokasi')
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
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
