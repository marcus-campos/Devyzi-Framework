<?php

namespace App\Controllers;


use DEVYZI\Controller\Action;

class ContactController extends Action
{
    public function show()
    {
        $this->view->data = array("Moto G1", "Moto G2");
        $this->render("Contact.Contact"); //Renderiza a view home
    }
}