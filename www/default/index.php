<?php

use MiladRahimi\PhpRouter\Exceptions\RouteNotFoundException;
use MiladRahimi\PhpRouter\Router;
use Zend\Diactoros\Response\HtmlResponse;

require_once('./vendor/autoload.php');

$listveg = false;

if (isset($argc)) {
    $arguments = (array_count_values($argv));
    if ($arguments['--list-veg']) {
        $listveg = true;
    }
}

if (!$listveg) {

    $router = new Router();

    $router->get('/vegetables', function () {
        $veg = new Vegetables();
        $results = $veg->populate();

        header('Content-type: application/json');
        return (JSON_encode($results));
    });

    try {
        $router->dispatch();
    } catch (RouteNotFoundException $e) {
        $router->getPublisher()->publish(new HtmlResponse('Not found.', 404));
    } catch (Throwable $e) {
        $router->getPublisher()->publish(new HtmlResponse('Internal error.', 500));
    }

} else {

    $a = new Vegetables();
    echo  (JSON_encode($a->populate()));

}
