<?php

/** Az URL szétszedése. Első körben megtisztítjuk a ?-jel utáni query_string-től */

$uriPart = explode('?' $_SERVER['REQUEST_URI'])[0];

/** Második körben az APPROOT értékét kivágjuk az URL-ből */

$cleanedUri = str_replace(APPROOT, '', $uriPart);

$stepBack = $cleanedUri == '' ? APPROOT.'/' : '';

for($i = 2; $i< count(explode('/', $cleanedUri)); $i++)
{
    $stepBack .= '../';
}

define('STEPBACK', $stepBack);

$routes = [];

addRoute('^$', 'homeController');
addRoute('^/$', 'homeController');
addRoute('^/allBus', 'allBusController');
addRoute('^/newBus', 'newBusController');

routing($cleanedUri);