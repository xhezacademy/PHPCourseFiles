<?php
namespace SimpleBlog\Core;

use SimpleBlog\Models\User;

class Helpers
{
    public $logged_in = false;

    public function __construct()
    {
        $this->logged_in = $this->auth();
    }

    function url($value)
    {
        echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    function auth()
    {
        $auth = isset($_SESSION['user']) ? $_SESSION['user'] : false;
        return $auth;
    }

    function current_user()
    {
        if (false !== self::auth()) {
            return User::where('email', $_SESSION['user'])->findOne()->id;
        }
    }
}
