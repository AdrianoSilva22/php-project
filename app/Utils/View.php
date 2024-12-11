<?php

namespace App\Utils;

class View
{


    /**
     * @param string
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }



    /**
     * @param string $view
     * @return string
     * @param array
     */

    public static function render($view, $vars = [])
    {
        $contentView = self::getContentView($view);

        $keys = array_keys($vars);
        $keys = array_map(function ($key) {
            return '{{'.$key.'}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }
}
