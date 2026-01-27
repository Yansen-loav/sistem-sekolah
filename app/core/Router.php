<?php
namespace App\Core;
class Router
{
    public function run()  
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        echo "{$method} {$uri}";

        if ($method == 'GET' && $uri == '/students') {
           require_once '../app/controllers/StudentsController.php';
           $controller = new \App\Controllers\StudentsController();
            return;
        }

        if ($method == 'GET' && $uri == '/students/create') {
          require_once '../app/controllers/StudentsController.php';
          $controller = new \App\Controllers\StudentsController();
            return;
        }

        http_response_code(404);
        echo "<h1>404 Not Found</h1>";
    }
}
?>