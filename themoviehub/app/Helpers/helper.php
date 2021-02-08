<?php
if (!function_exists('presentMovieRatingStarColor')) {
    function presentMovieRatingStarColor($movie_vote_avarage)
    {
        switch (true) {
            case ($movie_vote_avarage  * 10) < 50:
                return "text-warning";
                break;
            case ($movie_vote_avarage  * 10) >= 50:
                return "text-success";
                break;
        }
    }
}

if (!function_exists('presentMovieRatingPercentage')) {
    function presentMovieRatingPercentage($movie_vote_avarage)
    {
        switch (true) {
            case (is_numeric($movie_vote_avarage) && $movie_vote_avarage > 0):
                return $movie_vote_avarage  * 10 . "<sup>%</sup>";
                break;
            case (!is_numeric($movie_vote_avarage)):
                return "NR";
                break;
        }
    }
}
