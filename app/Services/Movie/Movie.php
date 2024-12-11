<?php

namespace App\Services\Movie;


use App\Exceptions\MovieException;

class Movie
{
    public function __construct
    (
        private string $name,
        private MovieLabel $label
    ) {
    }

    protected static function getList(): array {

        return [
            ['name' => 'Гарри поттер', 'label' => MovieLabel::NewRealise],
            ['name' => 'Копи Царя Соломона', 'label' => MovieLabel::Regular],
        ];
    }

    /**
     * @throws MovieException
     */
    public static function firstByName(string $name): static
    {
        $result = collect(static::getList())
            ->where('name', $name)
            ->first();

        if(is_null($result))
            throw new MovieException("Такого $name нет в списке.");

        return new static(...$result);
    }


    public function getLabel(): MovieLabel
    {
        return $this->label;
    }

    public function getName():string
    {
        return $this->name;
    }
}
