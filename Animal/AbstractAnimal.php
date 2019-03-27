<?php

namespace Animal;

abstract class AbstractAnimal implements IAnimal
{
    /**
     * @var $name string
     * @var $age int
     */
    private $name, $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
