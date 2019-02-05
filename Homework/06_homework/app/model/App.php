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

       if(!isset($pathParts[2]) || empty($pathParts[2])){
           $id = 0;
       }else{
           $id = (int) $pathParts[2];
       }

        if (class_exists($controller) && method_exists($controller, $action)) {

            $controllerInstance = new $controller;
            if ($id !== 0) {
                $controllerInstance->$action($id);
            } else {
                $controllerInstance->$action();
            }

        }
        else{
            header('HTTP/1.0 404 Not Found');
            /*$view = new View();
            $view->render('error');*/
        }
    }
    public static function config($key)
    {
        $config = include BP.'app/config.php';
        return $config[$key];
    }
}

