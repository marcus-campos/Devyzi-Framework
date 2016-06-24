<?php
/**
 * Created
 * Date: 23/06/16
 * Time: 21:34
 */

namespace DEVYZI\Controller;

use DEVYZI\Config\ExtensionsSupport;
use DEVYZI\Config\Prefixes;

abstract class Action
{
    protected $view;
    private $action;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($action)
    {
        $this->action = $action;
        $prefix = new Prefixes();
        $extension = new ExtensionsSupport();

        $findme =  $prefix->Prefix()['doubleBarsInAddress'];

        $pos = strpos($this->action, $findme);

        if($pos !== false)
        {
            $this->action = str_replace(".","//", $this->action);
        }

        include_once "..".$prefix->Prefix()['defaultAddressViews'].$this->action.$extension->Extensions()['defaultViewExtension'];

    }
}