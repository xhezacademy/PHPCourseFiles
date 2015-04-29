<?php
require_once 'inc/header.php';

if (array_key_exists('user', $_SESSION) && !empty($_SESSION['user'])) {
	echo 'You are in.';
} else {
    die('Sorry, you cannot access that page.');
}
