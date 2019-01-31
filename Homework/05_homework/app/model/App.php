<?php

final class App
{
    public static function start()
    {
        $pathInfo = Request::pathInfo();
        $pathInfo = trim($pathInfo, '/');
        $pathParts = explode('/', $pathInfo);

        (!isset($pathParts[0]) || empty($pathParts[0])) ? $controller = 'Index': $controller = ucfirst(strtolower($pathParts[0]));
        $controller .= 'Controller';

        (!isset($pathParts[1]) || empty($pathParts[1])) ? $action = 'Index' : $action = strtolower($pathParts[1]);

        (class_exists($controller) && method_exists($controller, $action)) ? controller($controller, $action) : error404();
    }
}

function controller($controller, $action)
{
    $controllerInstance = new $controller;
    $controllerInstance->$action() ;
}

function error404()
{
    $view = new View();
    $view->render('error');
}


