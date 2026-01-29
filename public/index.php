<?php
require_once './app/core/Router.php';
use App\Core\Router;
$router = new Router();

$router->add('GET', '/students', 'StudentsController', 'index');
$router->add('GET', '/students/create', 'StudentsController', 'create');
$router->add('POST', '/students/{id}', 'StudentsController', 'show');
$router->run();
?>