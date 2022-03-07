<?php

namespace App\Models;

use App\Entities\DepartamentoHasProyectoEntity;
use App\Entities\ProyectoEntity;
use CodeIgniter\Model;

class Proyecto extends Model
{
    protected $table            = 'proyectos';
    protected $primaryKey       = 'id';
    protected $returnType       = ProyectoEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'nombre', 'descripcion', 'fecha_inicio', 'fecha_fin'];


    protected $afterInsert          = ['insert_hasDepartamento'];
    protected $afterUpdate          = ["insert_hasDepartamento"];


    // vars after insert
    protected $insert_hasDepartamento;

    public function proyecto_ajax()
    {
        $data = $this->select("proyectos.id, nombre, descripcion, fecha_inicio, fecha_fin")->get()->getResultArray();

        if (count($data) > 0) {

            $data1 = array("data" => ($data));
        }

        $data1 = array("data" => ($data));
        echo json_encode($data1);
    }


    // CRUD
    public function insert_proyecto($data)
    {

        $this->insert_hasDepartamento['id_departamento'] = $data['id_departamento'];

        $entityProyecto = new ProyectoEntity($data);

        $this->save($entityProyecto);
    }

    public function delete_Proyecto($id)
    {

        $this->delete($id);
    }

    // FUNTIONS AFTER
    public function insert_hasDepartamento($id)
    {
        $data = $this->insert_hasDepartamento;

        $data['id_proyecto'] = $id['id'];



        if (isset($id['id'][0])) {
            $data['id_proyecto'] = $id['id'][0];
        }

        $modelHasDepartamento = Model('DepartamentoHasProyecto');

        $modelHasDepartamento->where('id_proyecto', $data['id_proyecto'])->delete();

        $data = new DepartamentoHasProyectoEntity($data);

        $modelHasDepartamento->save($data);


    }
}
