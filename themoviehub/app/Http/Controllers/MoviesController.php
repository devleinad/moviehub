<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Get the the results of popular movies remotely
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        $title = "themovieshub - Movies";

        //get all popular movies
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')->json()["results"];

        //we also need to fetch genres and map to the ids specified, since only ids are specified
        $arrayOfGenres = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/genre/movie/list")->json()["genres"];


        //now lets generate a new collection of genre ids and their names
        $genres = collect($arrayOfGenres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        return view('movies.index', compact('popularMovies', 'title', 'genres'));
    }

    public function show($movie_id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $movie_id)->json();
        dd($movie);
    }
}
