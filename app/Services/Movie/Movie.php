<?php

namespace App\Services\Movie;

use App\Services\Movie\Label\Children;
use App\Services\Movie\Label\Label;
use App\Services\Movie\Label\NewRelease;
use App\Services\Movie\Label\Regular;
use Exception;


class Movie
{
    public const REGULAR = 1;
    public const NEW_RELEASE = 2;
    public const CHILDREN = 3;

    public Label $label;


    public function __construct
    (
        private string $name,
        int $label_id
    ) {
        $this->setLabelCode($label_id);
    }


    protected static function getList(): array {

        return [
            ['name' => 'Гарри поттер', 'label_id' => Movie::NEW_RELEASE],
            ['name' => 'Копи Царя Соломона', 'label_id' => Movie::REGULAR],
        ];
    }

    public function setLabelCode(int $label_id): void
    {
        $this->label = match ($label_id)
        {
            Movie::REGULAR => new Regular(),
            Movie::NEW_RELEASE => new NewRelease(),
            Movie::CHILDREN => new Children(),

            default => throw new Exception('Неизвестный тип фильма.'),
        };
    }

    public function getCost(int $days): float
    {
        return $this->label->getCost($days);
    }

    public function getPoints(int $days): int
    {
        return $this->label->getPoints($days);
    }

    public static function firstByName(string $name): static
    {
        $result = collect(static::getList())
            ->where('name', $name)
            ->first();

        if(is_null($result))
            throw new Exception("$name нет в списке.");

        return new static(...$result);
    }

    public function getName():string
    {
        return $this->name;
    }
}
