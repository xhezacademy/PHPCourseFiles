<?php

require_once 'classes/Person.php';
require_once 'classes/Student.php';
require_once 'helpers/Date.php';

use Project\Helpers\Date as Data;

// echo Person::$className;
// $person = new Person();
// echo $person->school;

$name = 'Valon';
$school = 'Poenta Training Academy';
$student = new \Project\Classes\Student($name, $school, 15);

echo 'Hello ' . $student->name . '.<br>';
echo 'Welcome to ' . $student->school . '.<br>';
echo Data::now();
