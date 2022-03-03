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

}
