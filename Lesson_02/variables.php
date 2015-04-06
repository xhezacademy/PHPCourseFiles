<?php
/**
 * Lesson 02 - Intro to PHP
 * Variables Part Two – String Operations
 * Working with String, Concatenation, Interpolation, etc.
 */

// Escaped Characters is a random character
// preceded with a backslash within double quoted strings.
// \n  \t  \\  \$

// String Concatenation
$firstName = 'Ersan';
$lastName  = 'Rexhepi';
// $fullName = $firstName . ' ' . $lastName;
$fullName = "$firstName $lastName"; # => Ersan Rexhepi


// String Interpolation
$fruit  = 'apple';
$message = "I have five {$fruit}s";


// Heredoc equivalent me Double Quotes
// $text = <<<'EOT' # nowdoc
$html = <<<HTML
  <div class='nav-bar'>
    <ul class='nav-list'>
      <li>$someValue</li>
      <li>$whatEver</li>
      <li>$testMe123</li>
    </ul>
  </div>
HTML;
echo $html;


/*
 * Assignment Short Syntax
*/
$value = 9;
$value += 7; # $value = $value + 7; #=> 16
$value %= 7; #=> 2


/**
 * Complex Data Type
 * Intro to Arrays
 */
// Array Long Syntax
// $arr = array();
// Array Short Syntax
// $arr = []; PHP >= 5.4
$name = 'Xhavit';
$age = 20;
$arr = array('Dinfort', 11.4, $name, $age);
echo gettype($arr);
