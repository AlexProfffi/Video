<?php

namespace App\Services;

use App\Services\Movie\MovieLabel;

class Statement
{
    public function __construct
    (
        private Customer $customer
    ) {
    }

    public function show(): string
    {
        $result[] = 'Учет аренды для ' . $this->customer->getName();

        foreach($this->customer->getRentals() as $rental)
        {
            $result[] = $rental->getMovie()->getName() . ': ' . $this->getCost($rental) . ' грн';
        }

        $result[] = 'Сумма задолженности составляет: ' . $this->getTotalCost() . ' грн';
        $result[] = 'Ваш бонус за активность: ' . $this->getTotalPoints();

        return implode(';' . PHP_EOL, $result);
    }

    private function getTotalPoints(): int
    {
        $result = 0;

        foreach($this->customer->getRentals() as $rental)
        {
            $result += $this->getPoints($rental);
        }

        return $result;
    }

    private function getPoints(Rental $rental): int
    {
        $result = 1;

        if(
            $rental->getMovie()->getLabel() == MovieLabel::NewRealise &&
            $rental->getDays() > 1
        ) {
            $result++;
        }

        return $result;
    }

    private function getTotalCost(): float
    {
        $result = 0.0;

        foreach($this->customer->getRentals() as $rental)
        {
            $result += $this->getCost($rental);
        }

        return $result;
    }

    private function getCost(Rental $rental): float
    {
        $result = 0.0;

        switch($rental->getMovie()->getLabel()) {

            case MovieLabel::Regular:

                $result += 2;

                if($rental->getDays() > 2) {
                    $result += ($rental->getDays() - 2) * 1.5;
                }

                break;

            case MovieLabel::NewRealise:

                $result += $rental->getDays() * 3;

                break;

            case MovieLabel::Children:

                $result += 1.5;

                if($rental->getDays() > 3) {
                    $result += ($rental->getDays() - 3) * 1.5;
                }

                break;
        }

        return $result;
    }
}
