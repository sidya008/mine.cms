<?php


namespace Engine;


use Engine\DI\DI;

class Cms
{
    /**
     * @var DI
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run cms
     */
    public function run()
    {
        echo 'Hello!';
    }
}