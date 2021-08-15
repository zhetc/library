<?php

use library\Str;

/**
 * 生成UUID
 * @return string
 */
if (!function_exists('uuid')) {
    function uuid()
    {
        return Str::uuid();
    }
}

/**
 * print_r格式化输出
 */
if (!function_exists('pr')) {
    function pr(...$args)
    {
        echo '<pre>';
        foreach ($args as $var) {
            print_r($var);
        }
    }
}

/**
 * var_dump格式化输出
 */
if (!function_exists('vd')) {
    function vd(...$args)
    {
        echo '<pre>';
        foreach ($args as $var) {
            var_dump($var);
        }
    }
}
