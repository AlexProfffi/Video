<?php

namespace App\Services\Movie\Label;

class Children extends Label
{
    public function getCost(int $days): float
    {
        $result = 1.5;

        if($days > 3) {
            $result += ($days - 3) * 1.5;
        }

        return $result;
    }
}
