<?php

namespace App\Controllers;

use App\Entities\EmpleadoEntity;

class Empleado extends BaseController
{

    public function getListEmpleados()
    {
        $model = Model('Empleado');

        $model->empleados_ajax();

    }

    public function agregarEmpleadosView()
    {

        return view('Empleado\NuevoEmpleado');

    }

    public function insert_Empleado()
    {

        if ($this->request->getPost() != null) {

            $model = Model('Empleado');

            $empleado = $this->request->getPost();
            $model->insert_Empleado($empleado);
        }
    }

    public function delete_Empleado()
    {

        if ($this->request->getPost() != null) {

            $model = Model('Empleado');

            $empleado = $this->request->getPost();
            $model->delete_Empleado($empleado['id']);
        }
    }

    public function modificarEmpleado($id)
    {

        $model = Model('Empleado');

        $empleado = $this->request->getPost();
        $empleadoParaModificar = $model->find($id);

        return view('Empleado\ModificarEmpleado', compact("empleadoParaModificar"));
    }

    public function modificarEmpleadoDB()
    {

        if ($this->request->getPost() != null) {

            $model = Model('Empleado');

            $empleado = $this->request->getPost();

            $entityEmpleado = new EmpleadoEntity($empleado);

            $model->save($empleado);
        }
    }

    public function mostrarDatosEmpleadosView()
    {

        return view('Empleado\DatosEmpleado');

    }

    public function calendarioTrabajoView()
    {

        return view('Empleado\Calendario');

    }

    public function NuevoUsuarioView()
    {

        return view('Empleado\NuevoUsuario');

    }
}
