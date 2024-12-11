<?php

namespace App\Services;

use App\Services\Movie\Movie;

class Rental
{
    public function __construct
    (
        private Movie $movie,
        private int $days
    ) {
    }

    public function getDays(): int
    {
        return $this->days;
    }

    public function getMovie(): Movie
    {
        return $this->movie;
    }
}
