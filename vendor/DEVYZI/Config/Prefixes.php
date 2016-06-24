<?php
/**
 * Created.
 * User: marcus
 * Date: 23/06/16
 * Time: 22:15
 */

namespace DEVYZI\Config;


class Prefixes
{
    public function Prefix()
    {
        return [

            /*
            * Default address to controllers
            */
            "defaultAddressModels" => "App\\Models\\",

            /*
             * Default address to controllers
             */
            "defaultAddressViews" => "/App/Views/",

            /*
             * Default address to controllers
             */
            "defaultAddressControllers" => "App\\Controllers\\",

            /*
             * Value to replace double bars inf address files
             */
            "doubleBarsInAddress" => ".",
        ];
    }
}