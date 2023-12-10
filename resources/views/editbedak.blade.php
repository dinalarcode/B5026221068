@extends('master')
@section('title', 'Edit Data Bedak')
@section('konten')

<head>
	<title>Data Bedak</title>
</head>
<body>

	<h2>Edit Bedak</h2>

	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

	@foreach($bedak as $p)
	<form action="/bedak/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodebedak }}">
        <div class="form-group row">
            <label for="merkbedak" class="col-sm-1 col-form-label text-right">Merk Bedak</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" required="required" id="merkbedak" name="merkbedak" placeholder="Masukkan Nama Bedak" value="{{ $p->merkbedak }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockbedak" class="col-sm-1 col-form-label text-right">Stock Bedak</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" required="required" id="stockbedak" name="stockbedak" placeholder="Masukkan Stock Bedak yang tersedia" value="{{ $p->stockbedak }}">
            </div>
        </div>
        <br/>
        <center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
	</form>
    @endforeach
@endsection
