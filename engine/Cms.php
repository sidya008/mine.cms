<?php


namespace Engine;


use Engine\DI\DI;
use Engine\Helper\Common;

class Cms
{
    /**
     * @var DI
     */
    private $di;

    public $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * Run cms
     */
    public function run()
    {
        $this->router->add('home', '/mine.cms/', 'HomeController:index');
        $this->router->add('Product', '/mine.cms/user/12', 'ProductController:index');
        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
        //print_r($this->di);

        print_r($routerDispatch);

    }

}