<?php

namespace Animal;

abstract class AbstractAnimal implements IAnimal
{
    const TYPE = '';
    /**
     * @var $name string
     * @var $age int
     */
    private $name, $age;

    /**
     * @param string $name Animal name
     * @param int $age Animal age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getType(): string
    {
        return static::TYPE;
    }
}
