<div class="popular-movie">
    <a href="{{route('movies.show',['movie_id' => $movie['id']])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"alt="{{$movie['original_title']}}">
    </a>
    <div class="movie-info">
        <div class="rating rounded-circle">
            <h5>{{$movie['vote_average'] * 10 > 0 ? $movie['vote_average'] * 10: "NR" }}<sup><small>%</small></sup></h5>
        </div>
        <h6 class="movie-title ml-3">{{$movie['original_title']}}</h6>
        <h6 class="movie-release-date text-muted ml-3">Released: {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</h6>
        <div class="genre-box ml-3">
            @foreach($movie['genre_ids'] as $genre)
            <i>{{$genres->get($genre)}} @if(!$loop->last),@endif</i>
            @endforeach
        </div>
    </div>
            
</div>