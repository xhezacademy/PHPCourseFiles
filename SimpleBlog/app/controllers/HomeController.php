<?php
// namespace SimpleBlog\Controllers;

/**
*
*/
class HomeController extends Controller
{
    public function index()
    {
        $auth = isset($_SESSION['user']) ? $_SESSION['user'] : false;

        $this->view('home/index', compact('auth'));
    }

    public static function about()
    {
        echo 'home/about';
    }
}
