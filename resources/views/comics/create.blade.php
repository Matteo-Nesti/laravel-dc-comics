@extends('layouts.main')


@section('main')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="row">

            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
            </div>

            <div class="mb-3 col-6">
                <label for="thumb" class="form-label">Copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="URL immagine">
            </div>





            <div class="mb-3 col-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
            </div>

            <div class="mb-3 col-3">
                <label for="series" class="form-label">serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
            </div>

            <div class="mb-3 col-3">
                <label for="type" class="form-label">Tipo di scrittura</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tipo di scrittura">
            </div>

            <div class="mb-3 col-3">
                <label for="sale_date" class="form-label">Data di Rilascio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Data di rilascio">
            </div>

            <div class="mb-3 col-6">
                <label for="artists" class="form-label">Artisti</label>
                <textarea class="form-control" id="artists" rows="3" name="artists">
                </textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea class="form-control" id="writers" rows="3" name="writers">
                </textarea>
            </div>

            <div class="mb-3 col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">
                </textarea>
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <button type="submit" class="btn btn-success">Aggiungi</button>
            <button type="reset" class="btn btn-danger ">Svuota</button>
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">torna indietro</a>
        </div>
    </form>
@endsection
