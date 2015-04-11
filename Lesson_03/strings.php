<?php

// String Operations
$title = 'Welcome to Poenta Labs!';
$term = 'Poenta';
// echo str_replace($term, "Kyan", $title);
echo strpos($title, $term);

$sUser = 'my_username01';
$aValid = array('-', '_');

if (!ctype_alnum(str_replace($aValid, '', $sUser))) {
  echo 'Your username is not properly formatted.';
} else {
  echo 'Mireseerdhe oj Zonjush!'.'<br>';
}

// String Length
if (strlen($sUser) < 5) {
  echo 'O jare shume t\'shkurt';
}

// Whitespace Triming Left-Right
$user = "    Ersan   Rexhepi  ";
$cleanUser = ltrim($user); # ltrim() rtrim()
// echo $cleanUser;

// String Functions
// echo substr($title, -12, 6) . '<br>';

$name = 'pizren city';
// echo strrev($name);
// echo ucfirst($name);
// echo ucwords($name);
echo strtolower(strtoupper($name));

// String to Array
$words = explode(' ', $title);
var_dump($words);
// echo $words[2];

// Array to String
$titulos = implode(' ', $words);
echo $titulos;
