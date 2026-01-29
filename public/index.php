<?php
require_once './app/core/Router.php';

use App\Core\Router;

$router = new Router();

//Register Routes
$router->add('GET', '/student', 'StudentController', 'index');
$router->add('GET', '/student/create', 'StudentController', 'create');
$router->add('GET', '/student/{id}', 'StudentController', 'show');

$router->run();

?>