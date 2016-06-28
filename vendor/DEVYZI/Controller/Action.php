<?php
/**
 * Created
 * Date: 23/06/16
 * Time: 21:34
 */

namespace DEVYZI\Controller;

use DEVYZI\Config\Addresses;
use DEVYZI\Config\ExtensionsSupport;
use DEVYZI\Config\Prefixes;
use DEVYZI\View\Blade;

abstract class Action extends Blade
{
    protected $view;
    private $action;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    /**
     * render pages
     * @param $action
     * @throws \Exception
     * @throws \Throwable
     */
    protected function render($action, $values = array())
    {
        $this->action = $action;
        $prefix = new Prefixes();
        $address = new Addresses();
        $extension = new ExtensionsSupport();

        $findme =  $prefix->Prefix()['doubleBarsInAddress'];

        $pos = strpos($this->action, $findme);

        if($pos !== false)
        {
            $this->action = str_replace(".","//", $this->action);
        }

        //include_once "..".$prefix->Prefix()['defaultAddressViews'].$this->action.$extension->Extensions()['defaultViewExtension'];

        $r = $this->loadBlade("..".$address->Address()['defaultAddressCacheViews'].$this->action.$extension->Extensions()['defaultViewExtension'], "..".$address->Address()['defaultAddressViews'].$this->action.$extension->Extensions()['defaultViewExtension'], $values);
        echo $r->render();
    }
}