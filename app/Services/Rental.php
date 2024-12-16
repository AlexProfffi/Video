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

    public function getCost(): float
    {
        return $this->movie->getCost($this->days);
    }

    public function getPoints(): int
    {
        return $this->movie->getPoints($this->days);
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
