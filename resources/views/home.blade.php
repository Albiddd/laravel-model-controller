@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            @foreach ($movies as $movie)
                <div class="card">
                    <div class="details">
                        <p>
                            <strong> Titolo: </strong>
                            <span>{{ $movie->title }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Titolo Originale: </strong>
                            <span>{{ $movie->original_title }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong>Nazionalità: </strong>
                            <span>{{ $movie->nationality }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Data: </strong>
                            <span>{{ $movie->date }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Voto: </strong>
                            <span>{{ $movie->vote }}</span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
