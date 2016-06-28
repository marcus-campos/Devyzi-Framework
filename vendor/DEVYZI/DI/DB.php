<?php
/**
 * Created.
 * Date: 28/06/16
 * Time: 18:37
 */

namespace DEVYZI\DI;




use DEVYZI\Config\Addresses;
use DEVYZI\DB\Conn;

class DB
{
    public static function get($model)
    {
        $address = new Addresses();
        $class = $address->Address()['defaultAddressModels'].ucfirst($model);
        return new $class(Conn::getDb());
    }
}