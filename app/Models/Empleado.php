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
    protected $allowedFields    = ['id_empleado','nombre', 'apellido', 'dni', 'fecha_nacimiento', 'id_horario'];

}
