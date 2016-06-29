<?php

namespace App\Controllers;


use App\Conn;
use App\Models\Client;
use DEVYZI\Controller\Action;
use DEVYZI\DI\DB;
use DEVYZI\JSON\JSON;

class HomeController extends Action
{
    public function show()
    {
        $client = DB::get("client");

        $clients = array("cliente" => $client->select('name, email','id = 2'));
        echo JSON::encode($clients);
        $this->render("Home", $clients); //Renderiza a view home
    }    
}