<?php

namespace App\Controllers;


class HomeController
{
    public function show()
    {
        $data = array("Moto G1", "Moto G2");
        include_once '../App/Views/Home.phtml';
    }
}