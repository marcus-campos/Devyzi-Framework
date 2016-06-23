<?php

namespace App\Controllers;


class HomeController
{
    public function show()
    {
        include_once '../App/Views/Home.phtml';
    }
}