<?php

namespace App\Controllers;

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

    public function modificarEmpleadosView()
    {

        return view('Empleado\ModificarEmpleado');

    }

    public function mostrarDatosEmpleadosView()
    {

        return view('Empleado\DatosEmpleado');

    }

    public function calendarioTrabajoView()
    {

        return view('Empleado\Calendario');

    }
}
