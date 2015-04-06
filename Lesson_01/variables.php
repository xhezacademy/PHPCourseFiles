<?php
/**
 * Lesson 01 - Intro to PHP
 * Variables Part One – Primitive Data Types
 * String, Integer, Float, Boolean
 */

// String
$title = "Poenta Training Academy";
$name  = 'Student Name';
$char  = chr(65); // char A
echo $title . "<br>";
var_dump($name);

// Integer
$age = 20;
// Type hinting
$age = (int) '20';
print gettype($age) . "<br>";

// Float
$price = 12.5; // Returned as Double w/ gettype()
var_dump($price);

// Boolean
$trueOrFalse = true;
$boolean = 12 != 15;
var_dump($trueOrFalse);
echo $boolean;

// CONSTANT
define('PI', 3.14);
const PIC = 3.14;
var_dump(PIC); // echo PIC;
