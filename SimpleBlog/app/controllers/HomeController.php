<?php
namespace SimpleBlog\Controllers;

use SimpleBlog\Core\Controller;

/**
 *
 */
class HomeController extends Controller
{
    public function index()
    {
        $this->view('home/index', null);
        return true;
    }

    public function about()
    {
        echo 'home/about';
    }

    public function selfInstance()
    {
        return $this;
    }

    protected function setBaseLayout($name) {
        return $this->layout = $name;
    }
}
