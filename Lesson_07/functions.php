<?php
/**
 * FUNCTIONS
 */
// Simple Function
function printHello()
{
    echo 'Hello World!' . "<br>";
}

printHello();

// Simple Function with Arguments
function pordhimi($a, $b = 2)
{
    echo $a * $b;
}

// pordhimi(7, 100);

// Complex Function with Arguments
function zevendesoByRef($kete, $me, &$value)
{
    $value = str_replace($kete, $me, $value);
    return $value;
}

function zevendesoByVal($kete, $me, $value)
{
    return str_replace($kete, $me, $value);
}

$text = 'Une jam gaun i madh, po aq sa ti!';
$vleren = zevendesoByVal('gaun', 'majmun', $text);
zevendesoByRef('gaun', 'majmun', $text);

echo $text;
