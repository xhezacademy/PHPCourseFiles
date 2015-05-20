<?php
// namespace SimpleBlog\Controllers;

/**
*
*/
class HomeController extends Controller
{
    public function index()
    {
        $user = isset($_SESSION['user']) ?
            $_SESSION['user'] :
            'Welcome Guest';

        $this->view('home/index', compact('user'));
    }

    public static function about()
    {
        echo 'home/about';
    }
}
