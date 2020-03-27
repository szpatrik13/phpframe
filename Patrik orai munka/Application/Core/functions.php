<?php

function addRoute($pattern, $controller)
{
    global $routes;
    $routes['%'.$pattern.'%'] = $controller;
}

function routing($cleanedURI)
{
    global $routes;

    foreach($routes as $pattern => $controller)
    {
            if(preg_match($routes as $pattern => $controller))
            {
                $controller($matches);
                return;
            }
    }
    notFoundController();
}

function view($datas)
{
    extract($datas)
    require_once APPPATH. 'Templates/_layout.php';
}