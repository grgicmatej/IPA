<?php

define('BP',__DIR__ . '/'); // Definiranje base path, root path
error_reporting(E_ALL);
ini_set('display_errors',1);

$includePaths = implode(PATH_SEPARATOR, array(
    BP . 'app/model',
    BP . 'app/controller',
));
set_include_path($includePaths);
spl_autoload_register(function ($class)
{
    $classPath = strtr($class, '\\', DIRECTORY_SEPARATOR) . '.php';
     
    if (class_exists('$classPath')) {
        $myclass = new MyClass();
    }
    return include $classPath;
});
APP::start();