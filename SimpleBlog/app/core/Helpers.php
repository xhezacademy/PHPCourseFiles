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

    function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
        $url = 'http://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
        return $url;
    }
}
