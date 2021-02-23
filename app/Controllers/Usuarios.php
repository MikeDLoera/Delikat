<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Usuarios extends BaseController
{
	use ResponseTrait;

	public function index()
	{
		return view('usuarios');
	}
}