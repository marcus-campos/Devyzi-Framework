<?php
namespace App;


class Routes
{
    private $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function initRoutes()
    {
        $routes['home'] = array('route'=>'/','controller'=>"HomeController",'action'=>'show');
        $routes['contact'] = array('route'=>'/contact','controller'=>"HomeController",'action'=>'contact');
        $this->setRoutes($routes);
    }

    public function run($url)
    {
        array_walk($this->routes, function($route) use ($url){
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']); //Caminho para a classe "controller"
                $controller = new $class; //Instancia a classe
                $action = $route['action'];//Nome da ação a ser executada
                $controller->$action();//Executa ação
            }
        });
    }

    public function setRoutes(array $routes)
    {
        $this->route = $routes;
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}