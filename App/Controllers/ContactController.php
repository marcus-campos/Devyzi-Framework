<?php

namespace App\Controllers;


class ContactController
{
    private $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    public function show()
    {
        $this->view->data = array("Moto G1", "Moto G2");
        include_once '../App/Views/Contact.phtml';
    }
}