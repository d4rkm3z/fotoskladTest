<?php

use Animal\IAnimal;

class Customer
{
    private $animal;

    /**
     * @param IAnimal $animal
     */
    public function setAnimal(IAnimal $animal){
        $this->animal = $animal;
    }
}
