<?php

define('MAIN_DIR', dirname(__DIR__));
define('INC_DIR', dirname(__DIR__).'/inc');

$config = parse_ini_file("config.ini.php", true);

/**
 * General Functions
 */
include_once INC_DIR . '/helpers.inc.php';

/**
 * Database Connection
 */
include_once INC_DIR . '/database.inc.php';

/**
 * App Includes
 */
include_once MAIN_DIR . '/app/models/User.php';
include_once MAIN_DIR . '/app/models/Post.php';

/**
 * Vendor Packages Autoload
 */
require_once 'vendor/autoload.php';


/**
 * Start Session
 */
session_start();
