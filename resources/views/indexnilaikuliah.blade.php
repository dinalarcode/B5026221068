@extends('master')
@section('title', 'Data Nilai')
@section('konten')
	<h3>Data Nilai</h3>

	<a href="/nilaikuliah/tambahnilaikuliah" class="btn btn-primary"> + Tambah Data</a>

	<br/>
    <p>Cari Data Pegawai :</p>
	<form action="/nilaikuliah/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari NRP .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
            <td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
			<td>@if ($p->NilaiAngka <=40)
                D
                @elseif ($p->NilaiAngka >= 41 && $p->NilaiAngka <= 60)
                C
                @elseif ($p->NilaiAngka >= 61 && $p->NilaiAngka <= 80)
                B
                @elseif ($p->NilaiAngka >= 81)
                A
                @endif</td>
			<td>
                {{ $p->NilaiAngka * $p->SKS }}
			</td>
		</tr>
		@endforeach
	</table>
    {{-- {{ $nilaikuliah->links() }} --}}
    @endsection
