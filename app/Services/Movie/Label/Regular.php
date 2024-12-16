<?php

namespace App\Services\Movie\Label;

class Regular extends Label
{
    public function getCost(int $days): float
    {
        $result = 2;

        if($days > 2) {
            $result += ($days - 2) * 1.5;
        }

        return $result;
    }
}
