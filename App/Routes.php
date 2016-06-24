<?php
namespace App;


use DEVYZI\Init\Bootstrap;

class Routes extends Bootstrap
{
    protected function initRoutes()
    {
        $route['home'] = array('route'=>'/','controller'=>"HomeController",'action'=>'show');
        $route['contact'] = array('route'=>'/contact','controller'=>"ContactController",'action'=>'show');
        $this->setRoutes($route);
    }
}