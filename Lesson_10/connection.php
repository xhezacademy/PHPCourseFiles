<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'blog';

//Open a new connection to the MySQL server
// Procedural Style
// $mysqli =  mysqli_connect('host','username','password','database_name');

// Object Oriented Style
$mysqli = new mysqli($hostname, $username, $password, $database);

// Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
