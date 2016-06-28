<?php
/**
 * Created
 * Date: 23/06/16
 * Time: 21:34
 */

namespace DEVYZI\Controller;

use DEVYZI\Config\ExtensionsSupport;
use DEVYZI\Config\Prefixes;
use DEVYZI\View\Blade;
use Illuminate\Support\Facades\View;

abstract class Action extends Blade
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

        //include_once "..".$prefix->Prefix()['defaultAddressViews'].$this->action.$extension->Extensions()['defaultViewExtension'];

        $r = $this->loadBlade("..".$prefix->Prefix()['defaultAddressCacheViews'].$this->action.$extension->Extensions()['defaultViewExtension'], "..".$prefix->Prefix()['defaultAddressViews'].$this->action.$extension->Extensions()['defaultViewExtension'], array('testvar' => ' hora atual: '.time()));
        echo $r->render();
    }
}