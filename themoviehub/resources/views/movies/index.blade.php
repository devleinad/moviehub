@extends('layouts.base')

@section('content')
    <div class="movies-container">
        <div class="popular-movies-container">
            <h2>Popular Movies</h2>
            <div class="movie">
                    @foreach($popularMovies as $popularMovie)
                        <x-movie-card :movie="$popularMovie" :genres="$genres"/>
                    @endforeach
            </div>
        </div>
    </div>
@endsection