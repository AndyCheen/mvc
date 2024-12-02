<?php
require_once "vendor/autoload.php";
$config = require "./App/config/controller.php";

use \App\Core\Router;

$router = new Router($config);
$router->run();

