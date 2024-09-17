{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1> {{ $comic->title }} </h1>
        <div class="row justify-content-center align-items-center g-4">
            <div class="col"> <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid"> </div>
            <div class="col"><b> Descrizione:  </b> {{ $comic->description }} </div>
            <div class="col"> <b> Prezzo: </b> {{ $comic->price }} </div>

            <a href="{{ route('comics.index') }}" class="btn btn-check"> Elenco Fumetti </a>
        </div>
    </div>
@endsection
