<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;

try{
    // Dependency injection
    $di = new DI();

    $cms = new Cms($di);
    $cms->run();
}catch (\ErrorException $errorException)
{
    echo $errorException->getMessage();
}