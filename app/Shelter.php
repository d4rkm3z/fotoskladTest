<?php

use Animal\IAnimal;

class Shelter
{
    private $animalsList = [];

    /**
     * Adds animal into the shelter
     * @param IAnimal $obj
     */
    public function put(IAnimal $obj)
    {
        array_push($this->animalsList, $obj);
    }

    /**
     * Returns animals in the shelter, sorted by name at ASC
     * @param string $sortType asc|desc
     * @return array
     */
    public function getAnimalsListSortedByName($sortType = 'asc')
    {
        $list = $this->animalsList;
        usort($list, function (IAnimal $animal_first, IAnimal $animal_second) use ($sortType) {
            $name_first = strtolower($animal_first->getName());
            $name_second = strtolower($animal_second->getName());
            if ($name_first === $name_second) {
                return 0;
            }
            if ($sortType == 'asc') {
                return ($name_first < $name_second) ? -1 : 1;
            } else {
                return ($name_first > $name_second) ? -1 : 1;
            }
        });
        return $list;
    }

    /**
     * Returns the animal living longer in the shelter
     * @return IAnimal
     */
    public function getLongerAnimal()
    {
        return array_shift($this->animalsList);
    }

    /**
     * Returns the animal living longer in the shelter by type
     * @param string $type
     * @return IAnimal
     */
    public function getLongerAnimalByType($type)
    {
        $list = array_filter($this->animalsList, function (IAnimal $animal) use ($type) {
            return $animal->getType() === $type;
        });
        $keys = array_keys($list);
        return array_splice($this->animalsList, $keys[0], 1)[0];
    }
}
