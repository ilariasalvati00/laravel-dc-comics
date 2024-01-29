<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

use Carbon\Carbon;



class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index' , compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dati = $request->all();

        $nuovo_elemento = new Comic();
        $nuovo_elemento->title=$dati["titolo"];
        $nuovo_elemento->description = $dati["descrizione"];
        $nuovo_elemento->thumb = $dati["copertina"];
        $nuovo_elemento->price = floatval($dati["prezzo"]);
        $nuovo_elemento->series = $dati["serie"];
        $nuovo_elemento->sale_date = Carbon::parse($dati["data_uscita"]);
        $nuovo_elemento->type = $dati["tipo"];

        $nuovo_elemento->save();

        //return redirect()->route('comics.show', $nuovo_elemento->id);
        return redirect()->route("comics.index");   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = Comic::find($id);
        return view("comics.show",compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);
        return view ("comics.edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic = Comic::find($id);
        $dati = $request->all();
        $comic->title = $dati["titolo"];
        $comic->description = $dati["descrizione"];
        $comic->thumb = $dati["copertina"];
        $comic->price = floatval($dati["prezzo"]);
        $comic->series = $dati["serie"];
        $comic->sale_date = Carbon::parse($dati["data_uscita"]);
        $comic->type = $dati["tipo"];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
