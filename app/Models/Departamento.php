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

}
