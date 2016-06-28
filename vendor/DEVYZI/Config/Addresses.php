<?php
/**
 * Created.
 * Date: 28/06/16
 * Time: 16:43
 */

namespace DEVYZI\Config;


class Addresses
{
    public function Address()
    {
        return [

            /*
            * Default address to models
            */
            "defaultAddressModels" => "App\\Models\\",

            /*
             * Default address to views
             */
            "defaultAddressViews" => "/App/Views/",
            /*
             * Default address to cache views blade
             */
            "defaultAddressCacheViews" => "/App/Storage/Views/Cache/",

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