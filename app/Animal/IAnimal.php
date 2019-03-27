<?php

namespace Animal;

interface IAnimal
{
    public function getName(): string;

    public function getAge(): int;

    public function getType(): string;
}
