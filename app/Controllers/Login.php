<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use \Config\Services;

class Login extends BaseController
{
	public function index()
	{
		return view('login');
	}

	public function auth()
	{
		$request = Services::request();
		
		if ($request->getServer('REQUEST_METHOD' != 'POST')) {
			return redirect()->to(base_url('/'));
		}

		$user = strtolower($request->getPost('user'));
		$pass = $request->getPost('pass');

		$usuario = model('Usuarios');
		$getUser = $usuario->obtenerUsuario(['Usuario' => $user]);
		
		if (count($getUser) > 0 && password_verify($pass, $getUser[0]['Contraseña'])) {
			session()->set([
				'id' => $getUser[0]['id'],
				'usuario' => $user,
				'rol' => $getUser[0]['Rol']
			]);

			//sesión expira en 12hrs(43200seg)
			session()->markAsTempdata([
				'id',
				'usuario',
				'rol'
			], 43200);

			return redirect()->to(base_url('/'));

		} else {
			return redirect()->to(base_url('/'))->with('error', true);
		}
	}

	function logout(){
		session()->destroy();
		return redirect()->to(base_url('/'));
	}
}
