<?php

namespace App\Services;

use App\Exceptions\MovieException;
use App\Services\Movie\Movie;


class Customer
{
    /**
     * @var array<int, Rental>
     */
    private array $rentals = [];

    private Statement $statement;


    public function __construct
    (
       public string $name
    ) {
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

    /**
     * @throws MovieException
     */
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

                throw new MovieException("Фильм $movieName вами взят уже на прокат");
            }
        }
    }

    public function getStatement(): Statement
    {
        return
            $this->statement ??= new Statement($this);
    }
}
