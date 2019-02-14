<?php

/**
 * Class Request
 *
 * Handles everything request related
 */
class Request
{
    /**
     * Resolves path info from $_SERVER to use with mod rewrite
     *
     * @return string
     */
    public static function pathInfo()
    {
        if (isset($_SERVER['PATH_INFO'])) {
            return $_SERVER['PATH_INFO'];
        } elseif (isset($_SERVER['REDIRECT_PATH_INFO'])) {
            return $_SERVER['REDIRECT_PATH_INFO'];
        } else {
            return '';
        }
    }


    public static function post($key, $default='')
    {
      return isset($_POST[$key]) ? $_POST[$key] : $default;
    }


   
}
