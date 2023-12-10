@extends('master')
@section('title', 'Edit Data Pegawai')
@section('konten')

<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label text-right">Nama</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" required="required" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label text-right">Jabatan</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" required="required" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label text-right">Umur</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" required="required" id="umur" name="umur" placeholder="Masukkan Umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label text-right">Alamat</label>
            <div class="col-xs-9">
            <textarea required="required" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div><br/>
		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
        <center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
	</form>
    @endforeach
@endsection
