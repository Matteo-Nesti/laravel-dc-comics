@extends('layouts.main')

@section('main')
    <h1 class="text-center mb-5">~ Tutti i Comics ~</h1>

    {{-- card --}}
    <div class="row justify-content-between g-5">
        @forelse ($comics as  $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Scopri di piu</a>
                </div>
            </div>
        @empty
    </div>
    <p class="text-center">Non ci sono comics disponibili</p>
    @endforelse
@endsection
