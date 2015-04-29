<?php

$config = parse_ini_file("config.ini.php", true);

/**
 * General Functions
 */
include_once 'helpers.inc.php';

/**
 * Database Connection
 */
include_once 'database.inc.php';


include_once 'class/User.php';

/**
 * Start Session
 */
session_start();
