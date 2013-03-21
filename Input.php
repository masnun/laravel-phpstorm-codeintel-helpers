<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */


class Input
{
    public static function get($key, $default = null)
    {
        return $default;
    }

    public static function has($key)
    {
        return TRUE;
    }

    public static function all()
    {
        return array();
    }

    public static function only()
    {
        return array();
    }

    public static function except()
    {
        return array();
    }

    public static function json()
    {
        return array();
    }

    public static function file($name)
    {
        return $name;
    }

    public static function hasFile($name)
    {
        return TRUE;
    }

}