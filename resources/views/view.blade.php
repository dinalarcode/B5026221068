@extends('master')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
    @foreach ($pegawai as $p)
        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-sm-4 border">
                    {{-- gambar masuk sini --}}
                </div>

                <div class="col-sm-8">
                    <div class = "form-group row">
                        <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                        <div class = "col-sm-10">
                            <output type = "text" id = "nama" name="name">
                                :     {{ $p->pegawai_nama }}
                            </output>
                        </div>
                    </div>

                    <div class = "form-group row">
                        <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                        <div class = "col-sm-10">
                            <output type = "text" id = "jabatan" name="jabatan">
                                :     {{ $p->pegawai_jabatan }}
                            </output>
                        </div>
                    </div>

                    <div class = "form-group row">
                        <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                        <div class = "col-sm-10">
                            <output type = "text" id = "umur" name="umur">
                                :     {{ $p->pegawai_umur }}
                            </output>
                        </div>
                    </div>

                    <div class = "form-group row">
                        <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                        <div class = "col-sm-10">
                            <output type = "text" id = "alamat" name="alamat">
                                :     {{ $p->pegawai_alamat }}
                            </output>
                        </div>
                    </div>

                    <div class = "col-sm-2 align-items-center mx-auto">
                        <a href='/pegawai' class = "btn btn-primary btn-block">OK</a>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
