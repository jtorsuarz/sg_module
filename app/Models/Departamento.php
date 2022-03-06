<?php

namespace App\Models;

use App\Entities\DepartamentoEntity;
use CodeIgniter\Model;

class Departamento extends Model
{
    protected $table            = 'departamentos';
    protected $primaryKey       = 'id_depart';
    protected $useAutoIncrement = true;
    protected $returnType       = DepartamentoEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_depart', 'nombre', 'descripcion'];

    // get deppartamento name
    public function getDepartamentoName($idEmpleado)
    {

        $name = "No asignado";

        $modelDepartHasEmpleado = Model('EmpleadoHasDepartamento');

        $data2 = $modelDepartHasEmpleado->select('id_departamento')->where('id_empleado', $idEmpleado)->get()->getResultArray();

        if (count($data2) > 0) {

            $idDepart = $data2[0]['id_departamento'];


            $data = $this->select('nombre')
                ->where('id_depart', $idDepart)
                ->get()
                ->getRow();

            if ($data) {
                $name = $data->nombre;
            }

        }

        return $name;
    }

    public function departamento_ajax()
    {
        $data = $this->select("departamentos.id_depart, nombre, descripcion")->get()->getResultArray();

        if (count($data) > 0) {

            $data1 = array("data" => ($data));
        }

        $data1 = array("data" => ($data));
        echo json_encode($data1);
    }

    public function insert_Departamento($departamento)
    {

        $entityDepartamento = new DepartamentoEntity($departamento);
        $this->insert($entityDepartamento);
    }

    public function delete_Departamento($id)
    {

        $this->delete($id);
    }



    public function departamento_ajax_select()
    {
        $data = $this->select("departamentos.id_depart, nombre, descripcion")->get()->getResultArray();

        if (count($data) > 0) {

            $data1 = ($data);
        }

        $data1 = ($data);
        echo json_encode($data1);
    }
}
