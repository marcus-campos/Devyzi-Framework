<?php
/**
 * Created
 * Date: 23/06/16
 * Time: 16:10
 */

namespace DEVYZI\Init;


use DEVYZI\Config\Prefixes;

abstract class Bootstrap
{
    private $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    protected function run($url)
    {

        array_walk($this->routes, function($route) use ($url){
            $prefix = new Prefixes();
            if($url == $route['route']){
                $class = $prefix->Prefix()['defaultAddressController'].ucfirst($route['controller']); //Caminho para a classe "controller"
                $controller = new $class; //Instancia a classe
                $action = $route['action'];//Nome da ação a ser executada
                $controller->$action();//Executa ação
            }
        });
    }

    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //Pega as rotas da requisitadas pelo usuário
    }
}