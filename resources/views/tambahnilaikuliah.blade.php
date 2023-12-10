@extends('master')
@section('title', 'Tambah Data Nilai')
@section('konten')
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-sm-1 col-form-label text-right">NRP</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="NRP" name="NRP" required="required">
            </div>
        </div>
		<div class="form-group row">
            <label for="NilaiAngka" class="col-sm-1 col-form-label text-right">Nilai Angka</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-sm-1 col-form-label text-right">SKS</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="SKS" name="SKS" required="required">
            </div>
        </div>
		<br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
