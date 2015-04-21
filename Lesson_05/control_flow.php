<?php
/**
 * CONTROL FLOW
 */
$cond_one = false;
$cond_two = true;

if ($cond_one) {
  echo 'Jemi brenda';
} elseif ($cond_two) {
  echo 'Jemi brenda t\'dytes';
} else {
  echo 'Nuk ishte true';
}

$name = 'Nderim';

if (isset($name)) {
  echo str_replace('er', 'or', $name);
} else {
  echo 'Spo ekziston xhaviti';
}

// Ternary Operator
// $result = isset($name) ?: true;
$result = (isset($name)) ? 'true' : 'false';
// if (isset($name)) {
//   $result = 'true';
// } else {
//   $result = 'false';
// }
