<?php

/**
*
*/
class Input
{
    public static function exists($type = 'post')
    {
        switch ($type) {
            case 'post' :
                return (!empty($_POST)) ? TRUE : FALSE;
                break;

            case 'get' :
                return (!empty($_GET)) ? TRUE : FALSE;
                break;

            default :
                return FALSE;
                break;
        }
    }

    public static function get($name)
    {
        if (isset($_POST[$name])) {
            return $_POST[$name];
        } elseif (isset($_GET[$name])) {
            return $_GET[$name];
        }

        return '';
    }
}
