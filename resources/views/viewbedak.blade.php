@extends('master')
@section('konten')
    <h2>Data Bedak</h2>

    <a href="/bedak"> Kembali</a>

    <br />
    <br />
    @foreach ($bedak as $p)
        <form action="/bedak/store" method="post">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-sm-4 border">
                    {{-- gambar masuk sini --}}
                </div>

                <div class="col-sm-8">
                    <div class = "form-group row">
                        <label for = "merkbedak" class = "col-sm-2 control-label">Merk Bedak</label>
                        <div class = "col-form-label col-sm-5">
                            <output type = "text" id = "merkbedak" name="merkbedak">
                                :      {{ $p->merkbedak }}
                            </output>
                        </div>
                    </div>

                    <div class = "form-group row">
                        <label for = "stockbedak" class = "col-sm-2 control-label">Stock Bedak</label>
                        <div class = "col-form-label col-sm-5">
                            <output type = "number" id = "stockbedak" name="stockbedak">
                                :      {{ $p->stockbedak }}
                            </output>
                        </div>
                    </div>
                    <div class = "col-sm-2 align-items-center mx-auto">
                        <a href='/bedak' class = "btn btn-primary btn-block">OK</a>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
