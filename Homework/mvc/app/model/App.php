<?php

final class APP
{
    public static function start()
    {
        $pathInfo = Request::pathInfo();
        $pathInfo = trim($pathInfo,'/');
        $pathParts = explode('/',$pathInfo);

        if(!isset($pathParts[0]) || empty($pathParts[0])){
            $controller = 'Index';
        } else {
            $controller = ucfirst(strtolower($pathParts[0]));
        }
        $controller .= 'Controller';
        if (!isset($pathParts[1]) || empty($pathParts[1])){
            $action = 'index';
        } else {
            $action = strtolower($pathParts[1]);
        }
        if(!isset($pathParts[2]) || empty($pathParts[2])) {
            $id = 0;
        } else {
            $id = strtolower($pathParts[2]);
        }

        if(class_exists($controller) && method_exists($controller, $action)){
            $controllerInstance = new $controller();
            if($id !==0){
                $controllerInstance -> $action($id);
            } else {
                $controllerInstance -> $action();
            }
        } else {
            header("HTTP/1.0 404 Not Found");
        }
    }
    public static function config($key){
        $config = include BP . 'app/config.php';
        return $config[$key];
    }
}