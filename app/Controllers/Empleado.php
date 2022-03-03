<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Empleado extends BaseController
{
	public function getListEmpleados()
	{
		$model = Model('Empleado');

		$model->empleados_ajax();

	}
}
