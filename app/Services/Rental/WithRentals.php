<?php

namespace App\Services\Rental;

use App\Services\Movie\Movie;
use Exception;

trait WithRentals
{
    /**
     * @var array<int, Rental>
     */
    private array $rentals = [];

    public function rent(string $movieName, int $days): void
    {
        $this->checkMyRent($movieName);

        $this->rentals[] =
            new Rental(Movie::firstByName($movieName), $days);
    }

    private function checkMyRent(string $movieName): void
    {
        foreach ($this->rentals as $rental)
        {
            if($rental->getMovie()->getName() === $movieName) {

                throw new Exception("Фильм $movieName вами взят уже на прокат");
            }
        }
    }

    private function getTotalCost(): float
    {
        $result = 0.0;

        foreach($this->rentals as $rental)
        {
            $result += $rental->getCost();
        }

        return $result;
    }

    private function getTotalPoints(): int
    {
        $result = 0;

        foreach($this->rentals as $rental)
        {
            $result += $rental->getPoints();
        }

        return $result;
    }
}
