<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */


class Route
{
    public static function get($pattern, $action)
    {
        return TRUE;
    }

    public static function post($pattern, $action)
    {
        return TRUE;
    }

    public static function put($pattern, $action)
    {
        return TRUE;
    }

    public static function delete($pattern, $action)
    {
        return TRUE;
    }

    public static function patch($pattern, $action)
    {
        return TRUE;
    }

    public static function any($pattern, $action)
    {
        return TRUE;
    }

    public static function match($method, $pattern, $action)
    {
        return TRUE;
    }

    public static function controllers(array  $controllers)
    {
        return TRUE;
    }


    public static function controller($controller, $uri)
    {
        return TRUE;
    }

    public static function resource($resource, $controller, array   $options)
    {
        return TRUE;
    }


}