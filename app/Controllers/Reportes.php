<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Reportes extends BaseController
{
	public function index()
	{
		return view('reportes');
	}
}