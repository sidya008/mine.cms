<?php


namespace Engine\Helper;


class Common
{
    /**
     * @return bool
     */
    function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return bool|mixed|string
     */
    function getPathUrl()
    {
        $pathUrl = $_SERVER['REQUEST_URI'];

        if ($position = strpos($pathUrl, '?'))
        {
            $pathUrl = substr($pathUrl, $position);
        }

        return $pathUrl;
    }
}