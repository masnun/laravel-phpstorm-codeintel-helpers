<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */


class View
{
    /**
     * @param $templateName
     * @param array $data
     * @return string
     */
    public static function make($templateName, array $data = array())
    {
        return (string)$templateName;
    }
}