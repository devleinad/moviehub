@extends('layouts.base')

@section('content')
    <div class="single-movie-container">
        <div class="single-movie-image-container">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"alt="{{$movie['original_title']}}">
        </div>

        <div class="single-movie-details mt-2">
            <div class="single-movie-title">
                <h2 class="font-weight-bold text-white">{{$movie['original_title']}}</h2>
                <div class="tagline">
                        <h5 class="text-warning"><i>{{$movie['tagline']}}</i></h5>
                </div>
            </div>
            
                <div class="single-movie-sub-info mt-4">
                    <small class="text-white">Released: {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}} 
                    </small>
                    &nbsp;
                    <span class="fa fa-circle text-warning ml-2" style="font-size: 6px"></span> &nbsp;
                    <small class="text-white ml-4">Genres: @foreach($movie['genres'] as $genre) <i class="text-warning">{{$genre['name']}}</i> @if(!$loop->last),@endif @endforeach</small>
                    <div class="rating">
                        <small>Rated: <span class="fa fa-star {!! presentMovieRatingStarColor($movie['vote_average']) !!}" style="font-size: 10px"></span> 
                            {!! presentMovieRatingPErcentage($movie['vote_average']) !!}
                        </small>
                    </div>

                    <div class="overview mt-4">
                        <small class="text-warning">Movie Overview</small>
                            <p class="text-white">{{$movie['overview']}}</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
@endsection