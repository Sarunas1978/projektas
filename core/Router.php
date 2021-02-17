<?php


namespace app\core;

/**
 * Class Router
 *
 * This is where we call controllers and methods
 *
 * @package app\core
 */
class Router
{
    /**
     * This will hold all routes.
     *
     * routes [
     * ['get'  => [
     *  ['/' => function return,],
     *  ['/about' => function return,],
     * ],
     * ['post' => [
     *  ['/' => function return,],
     *  ['/about' => function return,],
     * ]]
     * ]
     *
     *
     * ];
     *
     * @var array
     */
    protected array $routes = [];
    public Request $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Add get route and callback fn to routes array
     *
     * @param string $path
     * @param $callback
     */
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * Executes user function if it is set in routes array
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        // trying to run a route from routes array
        $callback = $this->routes[$method][$path] ?? false;

        // if there is no such route added, we say not exist
        if ($callback === false) :
            echo "Page doesnt exists";
            die();
        endif;

        // page dose exsist we call user function
        echo call_user_func($callback);


    }


}