<?php

use Controllers\AnimalController;
use Core\Router\Request;
use Core\Router\Router;
require 'bootstrap.php';
require 'autoload.php'; // Pas toucher svp
require 'routes.php';

$router = new Router();
$router->run();

// $controller = new AnimalController();
// $controller->index();
