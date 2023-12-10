@extends('master')
@section('title', 'Tambah Data Bedak')
@section('konten')
	<h3>Tambah Data Bedak</h3>

	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

	<form action="/bedak/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkbedak" class="col-form-label col-sm-2">Merk Bedak</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="merkbedak" name="merkbedak" required="required">
            </div>
        </div>
		<div class="form-group row">
            <label for="stockbedak" class="col-form-label col-sm-2">Stok ditambahkan</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="stockbedak" name="stockbedak" required="required">
            </div>
        </div>
		<br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
