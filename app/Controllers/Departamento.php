<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Departamento extends BaseController
{
	public function index()
	{
		return view('Departamento/index');
	}
	public function nuevoDepartamentoView()
	{
		return view('Departamento/nuevo');
	}
	public function modificaDepartamentoView()
	{
		return view('Departamento/modifica');
	}

}
