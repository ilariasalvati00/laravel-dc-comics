@extends('layouts.app')

@section('titolo')
    Home
@endsection

@section('contenuto')
    <div class="p-container">
        @foreach ($comics as $fumetto)
            <a class="fumetto" href={{route("comics.show", $fumetto->id)}}>
                <div class="immagine" style="background-image : url('{{ $fumetto['thumb'] }}')"></div>
                <p>{{ $fumetto['title'] }}</p>
            </a>
        @endforeach
    </div>
@endsection