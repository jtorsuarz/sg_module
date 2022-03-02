<?php

namespace App\Models;

use App\Entities\DepartamentoHasProyectoEntity;
use CodeIgniter\Model;

class DepartamentoHasProyecto extends Model
{
    protected $table            = 'departamento_has_proyectos';
    protected $returnType       =  DepartamentoHasProyectoEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_departamento','id_proyecto'];

}
