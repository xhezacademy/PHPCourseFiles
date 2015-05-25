<?php

require_once 'interfaces/DogInterface.php';
require_once 'interfaces/ReptileInterface.php';
require_once 'classes/Animal.php';
require_once 'classes/Snake.php';
require_once 'classes/Dog.php';

$dog = new Dog('Deltari Ilir', true);
echo $dog->bark();

echo '<br><br>';

$snake = new Snake();
$snake->setNumberOfLegs(1);
// echo $snake->numberOfLegs;
$snake->crawl();
