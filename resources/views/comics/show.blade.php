@extends('layouts.app')

@section('contenuto')
    <div class="details">
        <div>
            <h2>{{$detail->title}}</h2>
        </div>
        <div class="content">
            <div class="image">
                <img src="{{ $detail->thumb }}">
            </div>
            <div class="description">
                <p>{{$detail->description}}</p>
                <div class="info">
                    <span>Serie: {{$detail->series}}</span>
                    <span>Data di uscita: {{$detail->sale_date}}</span>
                    <span>Prezzo: ${{$detail->price}}</span>
                </div>
            </div>
            <form action="{{route("comics.edit", $detail->id)}}" method="GET" class="form">
                @csrf
                <button type="submit">Modifica fumetto</button>
            </form>
        </div>
   </div>
@endsection