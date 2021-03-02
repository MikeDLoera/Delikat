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
		$data['tabla'] = $model->findAll();

		return view('clientes', $data);
	}

	public function get($id)
	{
		$model = model('Clientes');
		$response = $model->find($id);
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

			$error = false;
			$errorArray = [];

			if ($data["Nombre"] == "") {
				$error = true;
				array_push($errorArray, ["id" => "nombre"]);
			}

			if (strlen($data["Celular"]) < 10) {
				$error = true;
				array_push($errorArray, ["id" => "celular"]);
			}

			if (!filter_var($data["Correo_Electronico"], FILTER_VALIDATE_EMAIL)) {
				$error = true;
				array_push($errorArray, ["id" => "correo"]);
			}
			
			$response = ["saved" => !$error];
			if (!$error) {
				$model = model('Clientes');

				if ($id == null) {
					$data["Saldo_Electronico"] = 0;
					$id = $model->insert($data);
				} else {
					$model->update($id, $data);
				}

				$response["data"] = $model->find($id);
				return $this->respond($response);

			} else {
				$response["data"] = $errorArray;
				return $this->respond($response);
			}

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
			$model->where("id", $id)->delete();
			return $this->respond(true);
		} else {
			throw PageNotFoundException::forPageNotFound();
		}
	}
}
