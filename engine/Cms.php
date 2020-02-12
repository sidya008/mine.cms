<?php


namespace Engine;


use Engine\DI\DI;

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
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('Product', '/product/{id}', 'ProductController:index');

        print_r($this->di);
    }

}