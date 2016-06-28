<?php
/**
 * Created.
 * Date: 28/06/16
 * Time: 16:49
 */

namespace DEVYZI\DB;


class Conn
{
    public static function getDb()
    {
        return new \PDO("mysql:host=localhost;dbname=teste_oo","root","root");
    }
}