<?php

define('INC_ROOT', dirname(__DIR__));

define('ASSET_ROOT', INC_ROOT . 'public/assets');

define('HTTP_ROOT',
    'http://' . $_SERVER['HTTP_HOST'] .
    str_replace(
        'C:/wamp/www',
        '',
        str_replace('\\', '/', INC_ROOT.'/public/')
    )
);

/**
 * Vendor Packages Autoload
 */
require_once INC_ROOT . '/vendor/autoload.php';

require_once INC_ROOT . '/app/database.php';

/**
 * Start Session
 */
session_start();
