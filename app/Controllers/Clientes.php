<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use \Config\Services;
use CodeIgniter\Exceptions\PageNotFoundException;

class Clientes extends BaseController
{
	use ResponseTrait;

	public function index()
	{
		$model = model('Clientes');
		$data['tabla'] = $model->getClientes();

		return view('clientes', $data);
	}

	public function get($id)
	{
		$model = model('Clientes');
		$response = $model->getCliente($id);
		if ($response == null) $response = false;
		return $this->respond($response);
	}

	public function set()
	{
		$request = Services::request();
		if ($request->getServer('REQUEST_METHOD') == 'POST') {
			$id = $request->getPost('id');
			$data = [
				'Nombre' => $request->getPost('nombre'),
				'Celular' => $request->getPost('celular'),
				'Correo_Electronico' => $request->getPost('correo'),
			];

			$model = model('Clientes');
			return $this->respond($model->setCliente($id, $data));
		} else {
			throw PageNotFoundException::forPageNotFound();
		}
	}

	public function delete()
	{
		$request = Services::request();
		if ($request->getServer('REQUEST_METHOD') == 'POST') {
			$id = $request->getPost('id');
			
			$model = model('Clientes');
			$response = $model->deleteCliente($id);
			if ($response != false) $response = true;
			return $this->respond($response);
		} else {
			throw PageNotFoundException::forPageNotFound();
		}
	}
}
