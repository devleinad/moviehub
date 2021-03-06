<div class="popular-movie">
    <a href="{{route('movies.show',['movie_id' => $movie['id']])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"alt="{{$movie['original_title']}}">
    </a>
    <div class="movie-info">
        <h6 class="movie-title ml-3">{{$movie['original_title']}}</h6>
        <h5 class="movie-release-date ml-3">
            Released: {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}
        </h5>
        <div class="rating">
            <h5>Rated: <span class="fa fa-star {!! presentMovieRatingStarColor($movie['vote_average']) !!}" style="font-size: 10px"></span>
                {!! presentMovieRatingPercentage($movie['vote_average']) !!}
            </h5>
        </div>
        <div class="genre-box ml-3">
            <h5>@foreach($movie['genre_ids'] as $genre)
            <i>{{$genres->get($genre)}} @if(!$loop->last),@endif</i>
            @endforeach
            </h5>
        </div>
    </div>
            
</div>