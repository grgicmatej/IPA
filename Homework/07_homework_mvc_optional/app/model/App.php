<?php

final class App
{

    /**
     * Resolves and dispatch controller/action
     */
    public static function start()
    {
        $pathInfo = Request::pathInfo();
        $pathInfo = trim($pathInfo, '/');
        $pathParts = explode('/', $pathInfo);
        //resolve controller
        if (!isset($pathParts[0]) || empty($pathParts[0])) {
            $controller = 'Index';
        } else {
            $controller = ucfirst(strtolower($pathParts[0]));
        }
        $controller .= 'Controller';
        //resolve action
        if (!isset($pathParts[1]) || empty($pathParts[1])) {
            $action = 'index';
        } else {
            $action = strtolower($pathParts[1]);
        }

        //resolve action
        if(!isset($pathParts[2]) || empty($pathParts[2])) {
            $id = 0;
        } else {
            $id = strtolower($pathParts[2]);
        }

        //dispatch
        if (class_exists($controller) && method_exists($controller, $action)) {
            $controllerInstance = new $controller();
            if ($id !== 0) {
                $controllerInstance->$action($id);
            } else {
                $controllerInstance->$action();
            }
        } else {
            header("HTTP/1.0 404 Not Found");
        }
    }

    public static function config($key)
    {
        $config = include BP . 'app/config.php';
        return $config[$key];
    }
}