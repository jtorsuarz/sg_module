<?php

namespace App\Models;

use App\Entities\EmpleadoEntity;
use App\Entities\EmpleadoHasDepartamentoEntity;
use App\Entities\UsuarioEntity;
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

    protected $afterInsert          = ['insert_user'];
    protected $afterUpdate          = ["insert_user"];

    // vars user 
    protected $userInsert;
    protected $insert_departamento_has_empleado;

    public function empleados_ajax()
    {
        $modelDepart = Model('Departamento');

        $data = $this->select("empleados.id_empleado, CONCAT(nombre,' ', apellido) as fullName, dni, fecha_nacimiento, id_permiso, salario_bruto, fehca_inicio_vacaciones, fehca_fin_vacaciones")
            ->where('id_permiso !=', 0)->get()->getResultArray();

        if (count($data) > 0) {
            
            // traer departamento

            foreach ($data as $key => $value) {

                // aqui codigo para botones
                // $data[$key]['btn'] = '<button type="checkbox" class="input-perso usuariosSelect" onClick="trash(' . $value['id_empleado'] . ')" value="' . $value['id_empleado'] . '"></button>';
                
                $data[$key]['depart'][] = $modelDepart->getDepartamentoName($value['id_empleado']);
            }

            $data1 = array("data" => ($data));
        }
        $data1 = array("data" => ($data));
        echo json_encode($data1);
    }

    public function administrados_ajax()
    {
        $modelDepart = Model('Departamento');

        $data = $this->select("empleados.id_empleado, CONCAT(nombre,' ', apellido) as fullName, dni, fecha_nacimiento, id_permiso, salario_bruto, fehca_inicio_vacaciones, fehca_fin_vacaciones")
            ->where('id_permiso', 0)->get()->getResultArray();

        if (count($data) > 0) {

            foreach ($data as $key => $value) {

                // aqui codigo para botones
                // $data[$key]['btn'] = '<button type="checkbox" class="input-perso usuariosSelect" onClick="trash(' . $value['id_empleado'] . ')" value="' . $value['id_empleado'] . '"></button>';
                $data[$key]['depart'][] = $modelDepart->getDepartamentoName(5);
            }

            $data1 =  ($data);
        }
        $data1 =  ($data);
        echo json_encode($data1);
    }

    public function insert_Empleado($empleado)
    {

        if (!empty($empleado['password'] && $empleado['password'] != null)) {
            $this->userInsert['password'] = $empleado['password'];
        }
        $this->userInsert['usuario'] = $empleado['dni'];

        $this->insert_departamento_has_empleado['id_departamento'] = $empleado['id_departamento'];

        $entityEmpleado = new EmpleadoEntity($empleado);
        $this->save($entityEmpleado);

    }

    public function delete_Empleado($id)
    {

        $this->delete($id);
    }

    public function insert_user($empleado)
    {

        $modelUser = Model('Usuario');

        $idUser = $modelUser->select('id')->where('id_empleado', $empleado['id'])->get()->getResultArray();


        if (count($idUser) > 0) {
            $idUser = $idUser[0]['id'];
            $this->userInsert['id'] = $idUser;
        }

        // before vars
        $this->userInsert['id_empleado'] = $empleado['id'];
        $this->insert_departamento_has_empleado['id_empleado'] = $empleado['id'];

        if (isset($empleado['id'][0])) {
            $this->userInsert['id_empleado'] = $empleado['id'][0];
            $this->insert_departamento_has_empleado['id_empleado'] = $empleado['id'][0];
        }

        $entityUser = new UsuarioEntity($this->userInsert);

        $modelUser->save($entityUser);

        $this->insert_departamento_has_empleado();
    }

    public function insert_departamento_has_empleado(){

        $datos = $this->insert_departamento_has_empleado;

        $modelDepartHasEmpleado = Model('EmpleadoHasDepartamento');

        $modelDepartHasEmpleado->where('id_empleado', $datos['id_empleado'])->delete();

        $entityDepartHasEmpleado = new EmpleadoHasDepartamentoEntity($datos);

        $modelDepartHasEmpleado->insert($entityDepartHasEmpleado);
    }

}
