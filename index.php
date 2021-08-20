<?php

include __DIR__ . './vendor/autoload.php';

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;


$collector = new RouteCollector();

foreach ( glob(  'models/*.php') as $models)
{

  include_once $models;

}
foreach ( glob(  'controllers/*.php') as $controladores)
{

  include_once $controladores;

}



$dispatcher =  new Dispatcher($collector->getData());
$url = $_GET['url'];
$metodo = $_SERVER['REQUEST_METHOD'];

try {
    echo $dispatcher->dispatch($metodo, $url); # Mandar sólo el método y la ruta limpia
} catch (HttpRouteNotFoundException $e) {
    echo "Error: Ruta no encontrada";
    echo "<a href='./'>go</a>";
} catch (HttpMethodNotAllowedException $e) {
    echo "Error: Ruta encontrada pero método no permitido";
}