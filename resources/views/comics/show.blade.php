@extends('layouts.main')

@section('main')
    <div class="row justify-content-between g-5 ">

        <div class="card text-center  mx-auto">
            <img src="{{ $comic->thumb }}" class="card-img-top w-25 mx-auto" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                {{-- info base --}}
                <div class="d-flex justify-content-around mt-5">
                    <div class="col-3">
                        <h5>Serie</h5>
                        <p class="card-text">{{ $comic->series }}</p>
                    </div>

                    <div class="col-3">
                        <h5 class="card-title">Prezzo</h5>
                        <p class="card-text">{{ $comic->price }}</p>
                    </div>

                    <div class="col-3">
                        <h5 class="card-title">Tipo di scrittura</h5>
                        <p class="card-text">{{ $comic->type }}</p>
                    </div>

                    <div class="col-3">
                        <h5 class="card-title">Data di Rilascio</h5>
                        <p class="card-text">{{ $comic->sale_date }}</p>
                    </div>
                </div>
                {{-- lista artisti e scrittori --}}
                <div class="d-flex justify-content-around mt-5">
                    <ul class="list-group col-5">
                        <li class="list-group-item">
                            <h5>Artisti</h5>
                        </li>
                        <li class="list-group-item">{{ $comic->artists }}</li>
                    </ul>
                    <ul class="list-group col-5">
                        <li class="list-group-item">
                            <h5>Scrittori</h5>
                        </li>
                        <li class="list-group-item">{{ $comic->writers }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('comics.index') }}" class="btn btn-secondary my-3">
        torna ai comics
    </a>
    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary my-3">
        modifica
    </a>
@endsection
