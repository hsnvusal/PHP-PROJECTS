<?php
 
namespace App\Core;
 
class Route
{
    private static $routes = [];
 
    public static function add($uri, $controller)
    {
        self::$routes[$uri] = $controller;
    }
 
    public static function dispatch($uri)
    {
        foreach (self::$routes as $route => $controller) {
            // Dinamik parametreleri yakalamak için regex oluştur
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_-]+)', $route);
            $pattern = "#^" . $pattern . "$#";
 
            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // İlk eleman tüm eşleşmedir, onu çıkar
 
                [$class, $method] = explode('@', $controller);
                $class = "App\\Controllers\\" . $class;
 
                if (class_exists($class) && method_exists($class, $method)) {
                    call_user_func_array([new $class, $method], $matches);
                    return;
                } else {
                    http_response_code(404);
                    echo "404 Not Found - Sinif ya da Metot Bulunamadi";
                    return;
                }
            }
        }
 
        // Eğer hiçbir rota eşleşmezse
        http_response_code(404);
        echo "404 Not Found";
    }
}