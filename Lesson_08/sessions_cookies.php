<?php
/**
 * SESSIONS & COOKIES
 */

// Cookies
$expire = strtotime('+30 seconds');
setcookie('lastVisit', 'Mire se u ktheve.', $expire);

if (isset($_COOKIE['lastVisit'])) {
  $cookie = $_COOKIE['lastVisit'];
  echo $cookie;
} else {
  echo 'Mire se erdhe vizitor!' . '<br>';
}

// Sessions
session_start();

if (isset($_SESSION['visits'])) {
  $_SESSION['visits'] += 1;
} else {
  $_SESSION['visits'] = 1;
}

echo 'Total vizita te faqes ishin ' . $_SESSION['visits'] . '<br>';

if (isset($_SESSION['visits'])) {
    unset($_SESSION['visits']);
    session_destroy();
}
