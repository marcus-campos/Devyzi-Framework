<?php

namespace App\Controllers;


use App\Conn;
use App\Models\Client;
use DEVYZI\Controller\Action;
use DEVYZI\DI\DB;

class HomeController extends Action
{
    public function show()
    {
        $client = DB::get("client");

        $clients = array("cliente" => $client->find(2));

        $this->render("Home", $clients); //Renderiza a view home
    }    
}