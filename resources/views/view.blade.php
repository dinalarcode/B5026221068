@extends('master')
@section('title', 'Data Pegawai')
@section('konten')

<h2><a>Lihat Profil Pekerja</a><h2>

    <a href="/pegawai">Kembali</a>

    <br/>
    <br/>
    <h3 allign="center">Data Pegawai</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="hidden" name="id" value="{{ $p->pegawai_id }}"></td>
        </tr>
    </table>
@endsection
