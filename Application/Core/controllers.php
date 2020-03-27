<?php

function homeController($datas)
{
    view(['view' => 'home']);
}

function newBusController()
{
    view(['view' => 'newBus']);
}

function allBusController()
{
    view(['view' => 'allBus']);
}

function notFoundController()
{
    view(['view' => '404']);
}