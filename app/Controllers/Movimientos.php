<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use \Config\Services;
use CodeIgniter\Exceptions\PageNotFoundException;

class Movimientos extends BaseController
{
	use ResponseTrait;
	
	public function index()
	{
		return view('movimientos');
	}
}