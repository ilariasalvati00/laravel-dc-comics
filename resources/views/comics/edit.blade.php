@extends("layouts.app")

@section("contenuto")
    <h2>Modifica fumetto</h2>
    <form action="{{route("comics.update", $comic->id)}}" method="POST" class="form">
        @csrf <!-- {{ csrf_field() }} -->
        @method("PUT")
        <input type="text" name="titolo" id="" placeholder="Titolo" value="{{$comic->title}}">
        <input type="text" name="descrizione" placeholder="Descrizione" value="{{$comic->description}}">
        <input type="text" name="copertina" placeholder="URL copertina" value="{{$comic->thumb}}">
        <input type="text" name="prezzo" id="" placeholder="Prezzo" value="{{$comic->price}}">
        <input type="text" name="serie" placeholder="Serie" value="{{$comic->series}}">
        <input type="date" name="data_uscita" id="" value="{{$comic->sale_date}}">
        <input type="text" name="tipo" placeholder="Tipo" value="{{$comic->type}}">

        <button type="submit" class="submit">Invia</button>
    </form>
    <form action="{{route("comics.destroy", $comic->id)}}" method="POST" class="form">
        @csrf
        @method("DELETE")
        <button type="submit" class="elimina">Elimina fumetto</button>
    </form>
@endsection