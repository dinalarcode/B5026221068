@extends('master')
@section('title', 'Pesan')
@section('konten')
	<h3>Pesan</h3>

	<table class="table table-striped table-hover">
		<tr>
			<th></th>
		</tr>
		@foreach($chat as $p)
		<tr>
			<td>
                @foreach(explode(" ", $p->pesan) as $word)
                @if (array_key_exists($word, $emojiMappings))
                    <img src="{{ asset($emojiMappings[$word]) }}" alt="{{ $word }}">
                @else
                    {{ $word }}
                @endif
            @endforeach
			</td>
		</tr>
		@endforeach
	</table>
    @endsection
