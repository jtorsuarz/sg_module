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
    protected $allowedFields    = ['id_depart','nombre', 'descripcion'];

    // get deppartamento name
    public function getDepartamentoName($id)
    {
        $data = $this->select('nombre')
            ->where('id_depart', $id)
            ->get()
            ->getRow();

        return $data->nombre;
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
