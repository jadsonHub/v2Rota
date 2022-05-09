<?php

session_start();

require __DIR__ . '/vendor/autoload.php';

use App\request\Request;
use App\router\Router;
use App\util\View;

$request = new Request();
$router = new Router($request);
$view = new View();
$router->Router();
if ($request->getMethod() === 'GET') {
    extract($router->getData()['dados']);
}
