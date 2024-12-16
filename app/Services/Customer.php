<?php

namespace App\Services;


class Customer
{
    use WithStatement;

    public function __construct
    (
       public string $name
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
