<?php

define('BP',__DIR__ . '/'); // Definiranje base path, root path
error_reporting(E_ALL);
//ini_set('display_errors',1);

$includePaths = implode(PATH_SEPARATOR, array(
    BP . 'app/model',
    BP . 'app/controller',
));
set_include_path($includePaths);
spl_autoload_register(function ($class)
{
    $classPath = strtr($class, '\\', DIRECTORY_SEPARATOR) . '.php';
    // echo $classPath."<br>"; check
    /*if (!class_exists('$ClassPath')){
        return "404 error";
    }*/
    if (class_exists('$classPath')) {
        $myclass = new MyClass();
    }
    return include $classPath;

});





APP::start();
/*
function folder_exist($classPath)
{
    // Get canonicalized absolute pathname
    $path = realpath($classPath);

    // If it exist, check if it's a directory
    if($path !== false AND is_dir($path))
    {
        // Return canonicalized absolute pathname
        return $path;
    }

    // Path/folder does not exist
    return "ne postoji";
}*/