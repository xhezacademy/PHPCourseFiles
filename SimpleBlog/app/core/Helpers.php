<?php

define('MAIN_DIR', dirname(__DIR__));

function url($value)
{
	echo MAIN_DIR . "/$value";
}
