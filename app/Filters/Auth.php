<?php

namespace App\Filters;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $uri = strtolower($request->getServer('REQUEST_URI'));

        if ($uri != '/' && substr($uri, strlen($uri) - 1) == '/') {
            $uri = substr($uri, 0, strlen($uri) - 1);
        }

        if (!session('id') != null) {

            if ($uri != '/' && $uri != '/login/auth') {
                return redirect()->to(base_url('/'));
            }
        } else {

            $privilegios = [
                'Admin'         => ['reportes', 'pedidos', 'clientes', 'usuarios', 'inventario'],
                'Capturista'    => ['pedidos', 'clientes', 'inventario'],
                'Mesero'        => ['pedidos']
            ];

            if ($uri == '/') {
                return redirect()->to(base_url($privilegios[session('rol')][0]));
            }

            if ($uri != '/login/logout') {
                $pValido = false;

                foreach ($privilegios[session('rol')] as $i) {
                    if ($i == explode('/', $uri)[1]) {
                        $pValido = true;
                    }
                }

                if (!$pValido) {
                    throw PageNotFoundException::forPageNotFound();
                }
            }
        }

        function getUri(RequestInterface $request)
        {
            $url = strtolower($request->getServer('HTTP_HOST') . $request->getServer('REQUEST_URI'));
            $uri = str_replace(strtolower(explode("://", base_url())[1]), "", $url);

            return $uri;
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
