<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */


class Auth
{
    public static function check()
    {
        return TRUE;
    }

    public static function guest()
    {
        return TRUE;
    }

    public static function user()
    {
        return TRUE;
    }

    public static function attempt(array $credentials, $remember = TRUE)
    {
        return TRUE;
    }

    public static function login($user, $remember)
    {
        return TRUE;
    }

    public static function logout()
    {
        return TRUE;
    }

    public static function getCookieJar()
    {
        return TRUE;
    }

    public static function setCookieJar($cookie)
    {
        return TRUE;
    }

    public static function getDispatcher()
    {
        return TRUE;
    }

    public static function setDispatcher($dispatcher)
    {
        return TRUE;
    }

    public static function getSession()
    {
        return TRUE;
    }

    public static function getQueuedCookies()
    {
        return TRUE;
    }

    public static function getProvider()
    {
        return TRUE;
    }

    public static function getUser()
    {
        return TRUE;
    }

    public static function setUser($user)
    {
        return TRUE;
    }

    public static function getName()
    {
        return TRUE;
    }

    public static function getRecallerName()
    {
        return TRUE;
    }


}