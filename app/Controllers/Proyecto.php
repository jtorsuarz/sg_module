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
	public function getListaProyectos(){

		$model = Model('Proyecto');

        $model->proyecto_ajax();
	}

	public function delete_Proyecto(){

        if($this->request->getPost() != null){

            $model = Model('Proyecto');

            $proyecto = $this->request->getPost();
            $model->delete_Proyecto($proyecto['id']);
        }
    }
}
