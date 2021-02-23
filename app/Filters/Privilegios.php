<?php
namespace App\Filters;

function getPrivilegios()
{
    $privilegios = [
        // 'rol'        => ['controller'],
        'Admin'         => ['reportes', 'pedidos', 'clientes', 'usuarios', 'productos', 'movimientos'],
        'Capturista'    => ['pedidos', 'clientes', 'productos'],
        'Mesero'        => ['pedidos']
    ];

    return $privilegios;
}

function requestUri($generar = false)
{
    $uri = '';

    if ($generar) {
        $url = strtolower($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        $uri = str_replace(explode('://', base_url())[1], '', $url);
    } else {
        $uri = strtolower($_SERVER['REQUEST_URI']);
    }

    if ($uri != '/' && substr($uri, strlen($uri) - 1) == '/') {
        $uri = substr($uri, 0, strlen($uri) - 1);
    }

    return $uri;
}

function requestController()
{
    return explode('/', requestUri())[1];
}
