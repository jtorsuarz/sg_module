<?php

namespace App\Models;

use App\Entities\EmpleadoHasDepartamentoEntity;
use CodeIgniter\Model;

class EmpleadoHasDepartamento extends Model
{
    protected $table            = 'empleado_has_departamentos';
    protected $returnType       = EmpleadoHasDepartamentoEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_empleado','id_departamento'];
}
