<?php

/**
 * Dog Class
 */
class Dog extends Animal implements DogInterface
{
    public $is_pet = false;

    public function __construct($name, $is_pet = false)
    {
        parent::__construct($name);
        $this->is_pet = $is_pet;
    }

    public function bark()
    {
        echo 'Woof Woof';
    }

    public function run()
    {
        echo 'Running...';
    }

    public function setNumberOfLegs($legs)
    {
        $this->numberOfLegs = $legs;
    }
}
