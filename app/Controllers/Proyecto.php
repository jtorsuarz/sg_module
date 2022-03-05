<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Proyecto extends BaseController
{
	public function index()
	{
		return view('Proyecto/index');
	}
	public function nuevoProyectoView()
	{
		return view('Proyecto/nuevo');
	}
	public function modificaProyectoView()
	{
		return view('Proyecto/modifica');
	}
}
