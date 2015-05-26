<?php
define('INC_ROOT', dirname(__DIR__));

define('ASSET_ROOT', INC_ROOT . 'public/assets');

define('HTTP_ROOT',
    'http://' . $_SERVER['HTTP_HOST'] .
    str_replace(
        'Applications/MAMP/htdocs/',
        '',
        str_replace('\\', '/', INC_ROOT.'/public/')
    )
);
