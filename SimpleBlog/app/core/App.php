<?php
// namespace SimpleBlog\Core;

use Whoops\Run as WhoopsRun;
use Whoops\Handler\PrettyPageHandler as WhoopsPrettyPageHandler;

/**
*
*/
class App
{
    /**
     * Holds the Controller Name
     */
    protected $controller = 'HomeController';

    /**
     * Holds the Controller's Method
     */
    protected $method = 'index';

    /**
     * Paramters
     */
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        $this->initWhoopsErrorHandler();

        if (file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller();

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function initWhoopsErrorHandler()
    {
        $whoops = new WhoopsRun();
        $handler = new WhoopsPrettyPageHandler();
        $whoops->pushHandler($handler)->register();
        return $this;
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            // return $url = explode('/', filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
            return $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
        }
    }
}
