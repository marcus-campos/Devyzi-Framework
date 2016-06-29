<?php
/**
 * Created.
 * Date: 28/06/16
 * Time: 14:35
 */

namespace DEVYZI\View;

// the required libs
use DEVYZI\Config\Addresses;
use Illuminate\View\FileViewFinder;
use Illuminate\Filesystem\Filesystem as Filesystem;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container as Container;
use Illuminate\View\Factory;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\View as View;

class Blade
{
    function loadBlade($view, $viewPath = false, $data = array() ) {

        $address = new Addresses();

        // echo $this->viewPath;
        if(isset($viewPath)) {
            $this->viewPath = $viewPath;
        }

        // this path needs to be array
        $FileViewFinder = new FileViewFinder(
            new Filesystem,
            array($this->viewPath, $this->view)
        );

        // use blade instead of phpengine
        // pass in filesystem object and cache path
        $compiler = new BladeCompiler(new Filesystem(), '..'.$address->Address()['defaultAddressCacheViews']);
        $BladeEngine = new CompilerEngine($compiler);

        // create a dispatcher
        $dispatcher = new Dispatcher(new Container);

        // build the factory
        $factory = new Factory(
            new EngineResolver,
            $FileViewFinder,
            $dispatcher
        );

        // this path needs to be string
        $viewObj = new View(
            $factory,
            $BladeEngine,
            $view,
            $this->viewPath,
            $data
        );

        return $viewObj;
    }
}