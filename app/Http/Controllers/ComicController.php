<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];
        $new_comic->artists = $data['artists'];
        $new_comic->writers = $data['writers'];

        $new_comic->save();


        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title' => 'required|string',
                'thumb' => 'nullable|string|url:http,https',
                'price' => 'required|string',
                'series' => 'required|string',
                'type' => 'nullable|string',
                'sale_date' => 'nullable|string',
                'artists' => 'required|string',
                'writers' => 'required|string',
                'description' => 'required|string',

            ],
            // errori
            [
                'title.required' => 'il campo del titolo e` obbligatorio',
                'title.string' => 'il campo inserito non e` corretto',
                'thumb.url' => 'inserire un URL valido',
                'thumb.string' => 'il campo inserito non e` corretto',
                'price.string' => 'il campo inserito non e` corretto',
                'series.required' => 'il campo della serie e` obbligatorio',
                'series.string' => 'il campo inserito non e` corretto',
                'type.string' => 'il campo inserito non e` corretto',
                'sale_date.string' => 'il campo inserito non e` corretto',
                'artists.required' => 'il campo degli artisti e` obbligatorio',
                'artists.string' => 'il campo inserito non e` corretto',
                'writers.required' => 'il campo degli artisti e` obbligatorio',
                'writers.string' => 'il campo inserito non e` corretto',
                'description.required' => 'il campo della descrizione e` obbligatorio',
                'description.string' => 'il campo inserito non e` corretto',
            ]
        );




        $data = $request->all();


        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
