@extends('layouts.main')


@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ $comic->title }}">
            </div>

            <div class="mb-3 col-6 ">
                <label for="thumb" class="form-label">Copertina</label>
                <div class="d-flex justify-content-center align-items-start">
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                        name="thumb" value="{{ $comic->thumb }}">
                    <img src="{{ $comic->thumb }}" alt="" id="thumb-img" class="img-fluid w-25">
                </div>
            </div>

            <div class="mb-3 col-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3 col-3">
                <label for="series" class="form-label">serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                    name="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3 col-3">
                <label for="type" class="form-label">Tipo di scrittura</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{ $comic->type }}">
            </div>

            <div class="mb-3 col-3">
                <label for="sale_date" class="form-label">Data di Rilascio</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3 col-6">
                <label for="artists" class="form-label">Artisti</label>
                <textarea class="form-control @error('artists') is-invalid @enderror" id="artists" rows="5" name="artists">
                    {{ $comic->artists }}
                </textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea class="form-control @error('writers') is-invalid @enderror" id="writers" rows="5" name="writers">
                    {{ $comic->writers }}
                </textarea>
            </div>

            <div class="mb-3 col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5"
                    name="description">
                    {{ $comic->description }}
                </textarea>
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <button type="submit" class="btn btn-success">Modifica</button>
            <button type="reset" class="btn btn-danger ">Svuota</button>
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">torna indietro</a>
        </div>

        @vite('resources/js/thumb-preview.js')
    @endsection
