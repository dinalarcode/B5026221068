@extends('master')
@section('title', 'Data Bedak')
@section('konten')
    <h3>Data Bedak</h3>

    <a href="/bedak/tambahstock" class="btn btn-primary"> + Tambah Stock</a>

    <br />
    <p>Cari Data Bedak :</p>
    <form action="/bedak/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Merk.."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Bedak</th>
            <th>Merk Bedak</th>
            <th>Stock Bedak</th>
            <th>Kesediaan</th>
            <th style="text-align: center">Opsi</th>
        </tr>
        @forelse ($bedak as $p)
            <tr>
                <td>{{ $p->kodebedak }}</td>
                <td>{{ $p->merkbedak }}</td>
                <td>{{ $p->stockbedak }}</td>
                <td style="background-color: @if ($p->stockbedak > 0) green
                                        @else
                                        red @endif;
                                        color: white; text-allign: center;width:50px;">
                    {{ $p->stockbedak > 0 ? 'Y' : 'N' }}
                </td>
                <td style="text-align: center">
                    <a href="/bedak/view/{{ $p->kodebedak }}" class="btn btn-success">View</a>
                    |
                    <a href="/bedak/edit/{{ $p->kodebedak }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/bedak/hapus/{{ $p->kodebedak }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $nilaikuliah->links() }} --}}
@endsection
