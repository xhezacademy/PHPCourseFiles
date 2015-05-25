<?php

/**
 * Abstract Class Animal
 */
abstract class Animal
{
    public $family;

    public $numberOfLegs;

    function __construct($family = 'Ameba')
    {
        $this->family = $family;
    }

    public function getFamily()
    {
        return $this->family;
    }

    abstract public function setNumberOfLegs($numberOfLegs);
}
