<?php

namespace App\Controllers;


class ContactController
{
    public function show()
    {
        $data = array("Moto G1", "Moto G2");
        include_once '../App/Views/Contact.phtml';
    }
}