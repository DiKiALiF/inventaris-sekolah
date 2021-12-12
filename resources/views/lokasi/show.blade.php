@extends ('admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Lokasi</h1>
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
<form action = "{{route('lokasi.update', $lokasi->id)}}" method = "post">
@csrf
@method ('put')
<div class="form-group">
<label for = "">Nama Lokasi</label>
<input type="text" name="nama_lokasi" value = "{{$lokasi->nama_lokasi}}" class = "form-control @error('nama_lokasi') is-invalid @enderror"
disabled>
@error('nama_lokasi')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
<div class="form-group">
<label for = "">Jurusan</label>
<input type="text" name="jurusan" value = "{{$lokasi->jurusan}}" class = "form-control @error('jurusan') is-invalid @enderror"
disabled>
@error('jurusan')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
</form>
<div class="form-group">
<form action="{{ route('lokasi.index') }}">
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
