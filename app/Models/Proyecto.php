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

}
