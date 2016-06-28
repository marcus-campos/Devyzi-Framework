<?php

namespace App\Controllers;


use DEVYZI\Controller\Action;

class ContactController extends Action
{
    public function show()
    {
        $this->render("Contact.Contact"); //Renderiza a view home
    }
}