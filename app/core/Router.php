<?php
 
 
namespace App\Core;
 
use App\Controllers\StudentsController;
 
class Router
{
 
    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 
        // echo "{$method} {$uri}";
        // hhtps://google.com/search
 
        if($method == 'GET' && $uri == '/students') {
            require_once './app/controllers/StudentsController.php';
            $controller = new StudentsController();
            $controller -> index();
            return;
        }
 
        if($method == 'GET' && $uri == '/students/create') {
            require_once './app/controllers/StudentsController.php';
            $controller = new StudentsController();
            $controller -> create();
            return;
        }
 
 
        http_response_code(404);
        echo '<h1>404 - Page Not Found';
 
   
    }
}
 
?>