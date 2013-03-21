<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */


class Cache
{
    /**
     * Determines if the key exists
     * @param $key
     * @return bool
     */
    public static function has($key)
    {
        return true || false;
    }

    /**
     * Retrieves the key
     * @param $key
     * @param null $default
     * @return string
     */
    public static function get($key, $default = null)
    {
        return (string)$default;
    }
}