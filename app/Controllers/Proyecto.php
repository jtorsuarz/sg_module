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
	public function modificaProyectoView($id)
	{
		$model = Model('Proyecto');
		$modelDP = Model('DepartamentoHasProyecto');

		$empleado = $this->request->getPost();
		$proyecto = $model->find($id);

		$departamentos = $modelDP->where('id_proyecto', $id)->get()->getResultArray();

		if (count($departamentos) > 0) {
			$proyecto->id_departamento = $departamentos[0]['id_departamento'];
		}else{
			$proyecto->id_departamento = 0;
		}

		return view('Proyecto/modifica', compact("proyecto"));
	}
	public function getListaProyectos()
	{

		$model = Model('Proyecto');

		$model->proyecto_ajax();
	}

	// POST
	public function delete_Proyecto()
	{

		if ($this->request->getPost() != null) {

			$model = Model('Proyecto');

			$proyecto = $this->request->getPost();
			$model->delete_Proyecto($proyecto['id']);
		}
	}

	public function insert_ProyectoDB()
	{

		if ($this->request->getPost() != null) {

			$model = Model('Proyecto');

			$proyecto = $this->request->getPost();
			$model->insert_Proyecto($proyecto);
		}
	}
}
