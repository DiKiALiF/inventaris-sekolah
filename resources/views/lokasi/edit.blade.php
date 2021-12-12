@extends ('admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Lokasi</h1>
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
<form action = "{{route('lokasi.update', $lokasi->id)}}" method = "POST" enctype="multipart/form-data" >
@csrf
@method ('put')
<div class="form-group">
<label for = "">Nama Lokasi</label>
<input type="text" name="nama_lokasi" value = "{{$lokasi->nama_lokasi}}" class = "form-control @error('nama_lokasi') is-invalid @enderror">
@error('nama_lokasi')
<span class="invalid-feedback" role="alert">
<strong>{{$message}} </strong>
</span>
@enderror
</div>
                        <div class="form-group">
                        <label for="">Jurusan</label>
                        <select name="jurusan" value = "{{$lokasi->nama_lokasi}}"
                        class="form-control @error('jurusan') is-invalid @enderror">

                          <option value="RPL">RPL</option>
                          <option value="TBSM">TBSM</option>
                          <option value="TKRO">TKRO</option>
                          @error('jurusan')
                          <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </select>
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

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
