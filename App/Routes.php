<?php
namespace App;


use DEVYZI\Init\Bootstrap;

class Routes extends Bootstrap
{
    protected function initRoutes()
    {
        $routes['home'] = array('route'=>'/','controller'=>"HomeController",'action'=>'show');
        $routes['contact'] = array('route'=>'/contact','controller'=>"ContactController",'action'=>'show');
        $this->setRoutes($routes);
    }
}