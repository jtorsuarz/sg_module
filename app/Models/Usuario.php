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

        $modelDepart = Model('Departamento');

        $permiso = strtoupper($permiso);

        session()->set([
            'id' => $user->id,
            'id_empleado' => $empleado->id_empleado,
            'dni' => $user->usuario,
            
            'nombre' => $empleado->nombre,
            'apellidos' => $empleado->apellido,
            'username' => $empleado->nombre . ' ' . $empleado->apellido,
            'f_nacimiento' =>$empleado->fecha_nacimiento,
            'salario'=>$empleado->salario_bruto,
            'permiso' => $empleado->id_permiso,
            'permiso_name' => $permiso,
            'is_logged' => true
        ]);

        $departamentoUsuario = $modelDepart->getDepartamentoName(session('id_empleado'));

        session()->set([
            
            'departamento' => $departamentoUsuario
        ]);

    }


    public function getUserBy(string $columna, string $value)
    {

        return $this->where($columna, $value)->first();
    }
}
