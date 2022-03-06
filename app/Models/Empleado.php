<?php

namespace App\Models;

use App\Entities\EmpleadoEntity;
use CodeIgniter\Model;

class Empleado extends Model
{
    protected $table            = 'empleados';
    protected $primaryKey       = 'id_empleado';
    protected $useAutoIncrement = true;
    protected $returnType       = EmpleadoEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_empleado', 'nombre', 'apellido', 'dni', 'fecha_nacimiento', 'id_permiso', 'salario_bruto', 'fehca_inicio_vacaciones', 'fehca_fin_vacaciones'];

    public function empleados_ajax()
    {
        $modelDepart = Model('Departamento');

        $data = $this->select("empleados.id_empleado, CONCAT(nombre,' ', apellido) as fullName, dni, fecha_nacimiento, id_permiso, salario_bruto, fehca_inicio_vacaciones, fehca_fin_vacaciones")
            ->where('id_permiso !=', 0)->get()->getResultArray();

        if (count($data) > 0) {

            foreach ($data as $key => $value) {
                
                // aqui codigo para botones
                // $data[$key]['btn'] = '<button type="checkbox" class="input-perso usuariosSelect" onClick="trash(' . $value['id_empleado'] . ')" value="' . $value['id_empleado'] . '"></button>';
                $data[$key]['depart'][] = $modelDepart->getDepartamentoName(5);
            }

            $data1 = array("data" => ($data));
        }
        $data1 = array("data" => ($data));
        echo json_encode($data1);

    }

    public function insert_Empleado($empleado)
    {

        $entityEmpleado = new EmpleadoEntity($empleado);
        $this->insert($entityEmpleado);

    }

    public function delete_Empleado($id)
    {

        $this->delete($id);
    }
}
