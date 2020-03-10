<?php

use App\Vegetables;
use MiladRahimi\PhpRouter\Router;

require_once('./vendor/autoload.php');

$router = new Router();

$router->get('/vegetables', function () {
    $a = new Vegetables();
    return (JSON_encode($a->populate()));
});

$router->dispatch();


