<?php

use Animal\Cat;
use Animal\Dog;
use Animal\Turtle;

require 'vendor/autoload.php';

$shelter = new Shelter();
$customer = new Customer();

/** Put animals into the shelter */
$shelter->put(new Cat('Kitty', 2));
$shelter->put(new Dog('Bobby', 3));
$shelter->put(new Turtle('Slowly', 5));
$shelter->put(new Cat('Abrvalg', 1));
$shelter->put(new Dog('Nike', 2));
$shelter->put(new Dog('Reks', 3));

/** Logic with customer */
var_dump($shelter->getAnimalsListSortedByName()); //test printing animals list in the shelter
echo "-----------\n";
$customer->setAnimal($shelter->getLongerAnimal());
$customer->setAnimal($shelter->getLongerAnimalByType(Cat::TYPE));
echo "-----------\n";
var_dump($shelter->getAnimalsListSortedByName()); //test printing animals list in the shelter after pass animal to customer
