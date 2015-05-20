<?php

define('MAIN_DIR', dirname(__DIR__));

function url($value)
{
    echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}
