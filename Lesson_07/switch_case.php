<?php
/**
 * SWITCH/CASE
 */
$age = 14;

switch ($age) {
    case 10:
    case 11:
    case 15:
        echo "Qupi tades!";
        break;
    case $age > 15:
        echo "Koke rrit koke ba burre!";
        break;

    default:
        echo 'Spaska vjet.';
        break;
}

// example compare with IF
// if ($i == 0) {
//     echo "i equals 0";
// } elseif ($i == 1) {
//     echo "i equals 1";
// } elseif ($i == 2) {
//     echo "i equals 2";
// }

// switch ($i) {
//   case 0:
//     echo "i equals 0";
//     break;
//   case 1:
//     echo "i equals 1";
//     break;
//   case 2:
//     echo "i equals 2";
//     break;
// }
