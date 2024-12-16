<?php

namespace App\Services\Movie\Label;

abstract class Label
{
    abstract public function getCost(int $days): float;

    public function getPoints(int $days): int
    {
        return 1;
    }
}
