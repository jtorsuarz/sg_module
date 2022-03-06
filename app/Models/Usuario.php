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

        if ($empleado->id_permiso == 0) {
            $permiso = 'Administrador';
        }else{
            $permiso = 'Empleado';
        }

        $permiso = strtoupper($permiso);

        session()->set([
            'id' => $user->id,
            'dni' => $user->usuario,
            'username' => $empleado->nombre . ' ' . $empleado->apellidos,
            'permiso' => $empleado->id_permiso,
            'permiso_name' => $permiso,
            'is_logged' => true
        ]);
    }


    public function getUserBy(string $columna, string $value)
    {

        return $this->where($columna, $value)->first();
    }
}
