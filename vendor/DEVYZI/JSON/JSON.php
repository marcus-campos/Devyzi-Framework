<?php
/**
 * Created.
 * Date: 29/06/16
 * Time: 11:08
 */

namespace DEVYZI\JSON;


abstract class JSON
{
    public static function encode($array)
    {
        return json_encode($array);
    }
}