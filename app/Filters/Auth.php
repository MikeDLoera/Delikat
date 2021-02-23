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
        require_once('Privilegios.php');

        $uri = requestUri($request);

        if (!session('id') != null) {

            if ($uri != '/' && $uri != '/login/auth') {
                return redirect()->to(base_url('/'));
            }
        } else {
            $privilegios = getPrivilegios();

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
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
