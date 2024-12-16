<?php

namespace App\Services\Movie\Label;

class NewRelease extends Label
{
    public function getCost(int $days): float
    {
        return $days * 3;
    }

    public function getPoints(int $days): int
    {
        return ($days > 1) ? 2 : 1;
    }
}
