<?php

namespace App\Models;

use App\Entities\UsuarioEntity;
use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = UsuarioEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'usuario', 'password', 'id_empleado'];

    public function saveSession($user)
    {

        $empleado = Model('Empleado')->find($user->id_empleado);

        session()->set([
            'user_id' => $user->id,
            'username' => $user->usuario,
            'username' => $empleado->nombre . ' ' . $empleado->apellidos,
            'user_permiso' => $empleado->id_permiso,
            'is_logged' => true
        ]);
    }


    public function getUserBy(string $columna, string $value)
    {

        return $this->where($columna, $value)->first();
    }
}
