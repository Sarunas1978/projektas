<?php


namespace app\core;

/**
 * Get user page form url
 *
 * [REQUEST_URI] => /todos?id=5
 * extract /todos
 *
 * Class Request
 * @package app\core
 */
class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $questionPosition = strpos($path, '?');

        if ($questionPosition !== false) :
            $path = substr($path, 0, $questionPosition);
        endif;

        return $path;
    }
}