<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Inventario extends BaseController
{
	public function index()
	{
		return view('inventario');
	}
}