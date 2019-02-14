<?php
define('BP', __DIR__ . '/');
error_reporting(E_ALL);
ini_set('display_errors', 1);
$includePaths = implode(PATH_SEPARATOR, array(
    BP . 'app/model',
    BP . 'app/model/entity',
    BP . 'app/controller',
));
set_include_path($includePaths);
spl_autoload_register(function ($class) {
    $classPath = strtr($class, '\\', DIRECTORY_SEPARATOR) . '.php';
    if ($file = stream_resolve_include_path($classPath)) {
        include $file;
        return true;
    }
    return false;
});
App::start();