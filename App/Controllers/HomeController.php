<?php

namespace App\Controllers;


class HomeController
{
    private $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    public function show()
    {
        $this->view->data = array("Moto G1", "Moto G2");
        $this->render("Home");
    }

    public function render($action)
    {
        $current = get_class($this); //Pega o caminho da classe atual
        //$singleClassName = strtolower((str_replace("Controller","",str_replace("App\\Controllers\\",'',$current))));
        include_once "../App/Views/".$action.".phtml";
    }
}