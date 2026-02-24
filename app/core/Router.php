<?php
 
 
namespace App\Core;
 
use App\Controllers\StudentsController;
 
class Router
{
    private array $routes = [];

    public function add(string $method, string $uri, string $controller, string $function): void
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'callback' => $controller,
            'function' => $function
        ];
    }
    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 
        // echo "{$method} {$uri}";
        // hhtps://google.com/search
        foreach ($this->routes as $route) {
           $pattern = str_replace(search: '{id}', replace: '([0-9]+)', subject: $route['uri']);
           $pattern = "#^" . $pattern . "$#";

           if (preg_match($pattern, $uri, $matches)) {
            require_once './app/controllers/' . $route['callback'] . '.php';
            array_shift($matches); // Remove the full match
            $controllerClass = 'App\\Controllers\\' . $route['callback'];

            $controller = new $controllerClass();
            $function = $route['function'];
            call_user_func_array([$controller, $function], $matches);
            return;
          }
        }

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