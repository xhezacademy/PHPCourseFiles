<?php

require_once 'Person.php';
require_once 'Student.php';

// echo Person::$className;
// $person = new Person();
// echo $person->school;

$name = 'Valon';
$school = 'Poenta Training Academy';
$student = new Student($name, $school, 15);

echo 'Hello ' . $student->name . '.<br>';
echo 'Welcome to ' . $student->school . '.<br>';


?>