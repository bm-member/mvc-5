<?php

namespace Core;

class Router
{
    public $controller = 'HomeController';
    public $method = 'index';
    public $params = [];

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $url = $_GET['url'] ?? '';
        $url = explode('/', $url);
        if (isset($url[0])) {
            $controller = ucfirst(strtolower($url[0])) . 'Controller';
            $file = 'app/controller/' . $controller . '.php';
            if (file_exists(base_path($file))) {
                $this->controller = $controller;
            }
            unset($url[0]);
        }
        // class
        $this->controller = "App\Controller\\" . $this->controller;
        $this->controller = new $this->controller;

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            }
            unset($url[1]);
        }

        // params
        if (isset($url[2])) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
