@extends('layouts.main')


@section('main')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3 col-6">
                <label for="thumb" class="form-label">Copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3 col-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3 col-3">
                <label for="series" class="form-label">serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3 col-3">
                <label for="type" class="form-label">Tipo di scrittura</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>

            <div class="mb-3 col-3">
                <label for="sale_date" class="form-label">Data di Rilascio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3 col-6">
                <label for="artists" class="form-label">Artisti</label>
                <textarea class="form-control" id="artists" rows="5" name="artists">
                    {{ $comic->artists }}
                </textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea class="form-control" id="writers" rows="5" name="writers">
                    {{ $comic->writers }}
                </textarea>
            </div>

            <div class="mb-3 col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="5" name="description">
                    {{ $comic->description }}
                </textarea>
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <button type="submit" class="btn btn-success">Modifica</button>
            <button type="reset" class="btn btn-danger ">Svuota</button>
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">torna indietro</a>
        </div>
    @endsection
