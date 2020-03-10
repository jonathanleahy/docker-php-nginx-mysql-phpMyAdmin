<?php

use App\Vegetables;
use MiladRahimi\PhpRouter\Router;

require_once('./vendor/autoload.php');

$router = new Router();

$router->get('/vegetables', function () {
    $a = new Vegetables();
    return ( $a->show() );
    return '<p>This is homepag1e</p>';
});

$router->get('/t', function () {
    return '<p>This is /t route</p>';
});

$router->dispatch();


