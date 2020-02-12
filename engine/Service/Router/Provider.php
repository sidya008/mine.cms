<?php


namespace Engine\Service\Router;


use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    private $serviceName = 'router';

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }

    /**
     * @return mixed
     */
    public function init()
    {
        $router = new Router('http://localhost/mine.cms/');

        $this->di->set($this->getServiceName(), $router);
    }
}