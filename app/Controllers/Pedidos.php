<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Pedidos extends BaseController
{
	use ResponseTrait;

	public function index()
	{
		return view('pedidos');
	}

	public function getPedidos(){
		$model = model('Pedidos');
		return $this->respond($model->getPedidos());
	}
}