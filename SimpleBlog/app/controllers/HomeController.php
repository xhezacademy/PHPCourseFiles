<?php
// namespace SimpleBlog\Controllers;

/**
*
*/
class HomeController extends Controller
{
    public function __construct()
    {
        // $this->layout = $this->setBaseLayout('layout/default.php');
    }

    public function index()
    {
        return $this->view('home/index', null);
    }

    public static function about()
    {
        echo 'home/about';
    }

    protected function setBaseLayout($name) {
        return $this->layout = $name;
    }
}
