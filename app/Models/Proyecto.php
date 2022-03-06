<?php

namespace App\Models;

use CodeIgniter\Model;

class Proyecto extends Model
{
    protected $table            = 'proyectos';
    protected $primaryKey       = 'id';
    protected $returnType       = ProyectoEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'nombre', 'descripcion', 'fecha_inicio', 'fecha_fin'];

    public function proyecto_ajax()
    {
        $modelDepart = Model('Proyecto');

        $data = $this->select("proyectos.id, nombre, descripcion, fecha_inicio, fecha_fin")->get()->getResultArray();

        if (count($data) > 0) {

            $data1 = array("data" => ($data));
        }

        $data1 = array("data" => ($data));
        echo json_encode($data1);
    }

    public function delete_Proyecto($id)
    {

        $this->delete($id);
    }

}
