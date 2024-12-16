<?php

namespace App\Services;

use App\Services\Movie\Label\Regular;
use Exception;
use App\Services\Movie\Movie;


class Customer
{
    /**
     * @var array<int, Rental>
     */
    private array $rentals = [];


    public function __construct
    (
       public string $name
    ) {
    }

    public function showStatement(): string
    {
        $result[] = 'Учет аренды для ' . $this->getName();

        foreach($this->getRentals() as $rental)
        {
            $result[] = $rental->getMovie()->getName() . ': ' . $rental->getCost() . ' грн';
        }

        $result[] = 'Сумма задолженности составляет: ' . $this->getTotalCost() . ' грн';
        $result[] = 'Ваш бонус за активность: ' . $this->getTotalPoints();

        return implode(';' . PHP_EOL, $result);
    }

    private function getTotalCost(): float
    {
        $result = 0.0;

        foreach($this->getRentals() as $rental)
        {
            $result += $rental->getCost();
        }

        return $result;
    }

    private function getTotalPoints(): int
    {
        $result = 0;

        foreach($this->getRentals() as $rental)
        {
            $result += $rental->getPoints();
        }

        return $result;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array<int, Rental>
     */
    public function getRentals(): array
    {
        return $this->rentals;
    }

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
}
