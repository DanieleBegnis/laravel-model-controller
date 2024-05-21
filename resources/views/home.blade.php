@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card p-3 m-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie->original_title }}
                            </h6>
                            <p class="card-text">Paese di produzione: {{ $movie->nationality }}</p>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                            <p class="card-text">data di uscita: {{ $movie->date }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
