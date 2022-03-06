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

	public function getListDepartamento(){

		$model = Model('Departamento');

        $model->departamento_ajax();
	}

    public function insert_Departamento()
    {
       
        if($this->request->getPost() != null){

            $model = Model('Departamento');

            $departamento = $this->request->getPost();
            $model->insert_Departamento($departamento);
        }
    }

	public function delete_Departamento(){

        if($this->request->getPost() != null){

            $model = Model('Departamento');

            $departamento = $this->request->getPost();
            $model->delete_Departamento($departamento['id']);
        }
    }

	public function modificaDepartamento($id)
    {

        $model = Model('Departamento');

        $departamentoParaModificar = $model->find($id);

        return view('Departamento\modifica', compact("departamentoParaModificar"));
    }

    public function modificarDepartamentoDB()
    {

        if ($this->request->getPost() != null) {

            $model = Model('Departamento');

            $departamento = $this->request->getPost();

            $model->modify_Departamento($departamento);

        }
    }
	
	public function getListDepartamento_select(){

		$model = Model('Departamento');

        $model->departamento_ajax_select();
	}

}
