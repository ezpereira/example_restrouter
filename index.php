<?php

require 'vendor/autoload.php';
require 'api.php';

use Rest\Router;
use Example\Api;

header('Content-Type: text/html; charset=utf-8');

$router = new Router;
$routes = new Api;
$router->run($routes);
