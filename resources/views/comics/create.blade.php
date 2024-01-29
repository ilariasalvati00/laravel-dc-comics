@extends("layouts.app")

@section("contenuto")
    <form action="{{route("comics.store")}}" method="POST" class="form">
        @csrf <!-- {{ csrf_field() }} -->
        <input type="text" name="titolo" id="" placeholder="Titolo">
        <input type="text" name="descrizione" placeholder="Descrizione">
        <input type="text" name="copertina" placeholder="URL copertina">
        <input type="text" name="prezzo" id="" placeholder="Prezzo">
        <input type="text" name="serie" placeholder="Serie">
        <input type="date" name="data_uscita" id="">
        <input type="text" name="tipo" placeholder="Tipo">

        <button type="submit">Invia</button>
    </form>
@endsection