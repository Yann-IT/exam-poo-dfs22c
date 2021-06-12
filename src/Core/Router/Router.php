<?php

namespace Core\Router;
use Controllers\{PostController, CommentController};
use Facades\Route;

class Router
{
    private Request $request;

    /**
     * [
     *    'GET' => [
     *         ['uri' => $uri, 'controller' => $controller],
     *         ['uri' => $uri, 'controller' => $controller],
     *         ['uri' => $uri, 'controller' => $controller],
     *    ],
     *    'POST' => [
     *         ['uri' => $uri, 'controller' => $controller],
     *         ['uri' => $uri, 'controller' => $controller],
     *         ['uri' => $uri, 'controller' => $controller],
     *    ]
     * ]
     */
    private static array $routes = [];

    public function __construct()
    {
        $this->request = new Request();
    }

    public static function get($uri, $controller)
    {
        // compact("uri", "controller") => ['uri' => $uri, 'controller' => $controller]
        // array_push(self::$routes['GET'], compact("uri", "controller"))
        self::$routes['GET'][] = compact("uri", "controller");
    }

    public static function post($uri, $controller)
    {
        self::$routes['POST'][] = compact("uri", "controller");
    }

    public function run()
    {
        if (array_key_exists($this->request->getMethod(), self::$routes)) {
            // $this->test(self::$routes[$this->request->getMethod()]);
            $this->handleRoute(self::$routes[$this->request->getMethod()]);

            return;
        }

        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    }

    public function handleRoute($routes)
    {
        foreach ($routes as $route) {
            $regex = '#^' . preg_replace('#/{([^/]*)}#', '/([0-9]*?)', $route['uri']) . '$#';
            // $regex = '#^' . preg_replace('#/{([^/]*)}#', '/(.?)', $route['uri']) . '$#';
            $matches = [];

            if (preg_match_all($regex, $this->request->getUri(), $matches, PREG_SET_ORDER)) {
                // Route declarée, correspond à l'uri actuelle de l'utilisateur
                $params = array_slice($matches[0], 1);

                $controllerName = $route['controller'][0];
                $action = $route['controller'][1];

                $controller = new $controllerName();
                $controller->$action($this->request, ...$params);
                return;
            }
        }

        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    }
    public function test($routes){
        // $route = $routes['GET'][1];
        // var_dump($routes);
        // $uri = $route['uri'];
        $uri = "/posts/{id}";
        $request = "/posts/10";
        // $regex = preg_match('#/{([^/]*)}#', $uri);
        // $regex = "#^".$regex."$#";
        // $regex = '#^' . preg_replace('#/{([^/]*)}#', '/([0-9]*?)', $uri) . '$#';
        $regex = '#^' . preg_replace('#/{([^/]*)}#', '/(.?)', $uri) . '$#';
        if (preg_match_all($regex, $request, $matches, PREG_SET_ORDER)) {
            var_dump('test');
        }
    }
}
