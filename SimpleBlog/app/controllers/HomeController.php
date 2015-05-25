<?php
// namespace SimpleBlog\Controllers;

/**
*
*/
class HomeController extends Controller
{
    public function index()
    {
        $this->view('home/index', null);
    }

    public static function about()
    {
        echo 'home/about';
    }
}
