@extends ('admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Barang</h1>
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
<form action = "{{route('barang.update', $barang->id)}}" method = "post">
@csrf
@method ('put')
<div class="form-group">
<label for = "">Nama barang</label>
<input type="text" name="nama_barang" value = "{{$barang->nama_barang}}" class = "form-control @error('nama_barang') is-invalid @enderror"
disabled>
@error('nama_barang')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
<div class="form-group">
<label for = "">Stok</label>
<input type="text" name="stok" value = "{{$barang->stok}}" class = "form-control @error('stok') is-invalid @enderror"
disabled>
@error('stok')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
<div class="form-group">
<label for = "">Tanggal Masuk</label>
<input type="text" name="tgl_masuk" value = "{{$barang->tgl_masuk}}" class = "form-control @error('tgl_masuk') is-invalid @enderror"
disabled>
@error('tgl_masuk')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
<div class="form-group">
<label for = "">Kondisi</label>
<input type="text" name="kondisi" value = "{{$barang->kondisi}}" class = "form-control @error('kondisi') is-invalid @enderror"
disabled>
@error('kondisi')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
<div class="form-group">
<label for = "">Status</label>
<input type="text" name="status" value = "{{$barang->status}}" class = "form-control @error('status') is-invalid @enderror"
disabled>
@error('status')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
<div class="form-group">
                            <label for="">Lokasi</label>
                            <select name="id_lokasi" class="form-control @error('id_lokasi') is-invalid @enderror" disabled>
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
<label for = "">Jurusan</label>
<input type="text" name="jurusan" value = "{{$barang->jurusan}}" class = "form-control @error('jurusan') is-invalid @enderror"
disabled>
@error('jurusan')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
</form>
<div class="form-group">
<form action="{{ route('barang.index') }}">
<button class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>     Kembali</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
