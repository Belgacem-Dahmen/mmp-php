<?php

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}


function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}


function getPath($url)
{
    return parse_url($url, PHP_URL_PATH);
}


