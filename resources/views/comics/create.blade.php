@extends("layouts.app")

@section("contenuto")
    <form action="{{route("comics.store")}}" method="post" class="form">
        <input type="text" name="" id="" placeholder="Titolo">
        <input type="text" placeholder="Descrizione">
        <input type="text" placeholder="URL copertina">
        <input type="text" name="" id="" placeholder="Prezzo">
        <input type="text" placeholder="Serie">
        <input type="date" name="" id="">
        <input type="text" placeholder="Tipo">

        <input type="button" value="Invia">
    </form>
@endsection