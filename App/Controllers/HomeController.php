<?php

namespace App\Controllers;


use DEVYZI\Controller\Action;

class HomeController extends Action
{
    public function show()
    {
        $this->view->data = array("Moto G1", "Moto G2");
        $this->render("Home"); //Renderiza a view home
    }    
}