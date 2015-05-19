<?php

define('INC_ROOT', dirname(__DIR__));
define('ASSET_ROOT', INC_ROOT . 'public/assets');
define('HTTP_ROOT', INC_ROOT);

/**
 * Vendor Packages Autoload
 */
require_once INC_ROOT . '/vendor/autoload.php';

require_once INC_ROOT . '/app/database.php';
