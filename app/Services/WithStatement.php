<?php

namespace App\Services;

use App\Services\Rental\WithRentals;

trait WithStatement
{
    use WithRentals;

    public function showStatement(): string
    {
        $result[] = 'Учет аренды для ' . $this->getName();

        foreach($this->rentals as $rental)
        {
            $result[] = $rental->getMovie()->getName() . ': ' . $rental->getCost() . ' грн';
        }

        $result[] = 'Сумма задолженности составляет: ' . $this->getTotalCost() . ' грн';
        $result[] = 'Ваш бонус за активность: ' . $this->getTotalPoints();

        return implode(';' . PHP_EOL, $result);
    }
}
