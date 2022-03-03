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
		session()->set([
            'user_id' => $user->id,
            'user_email' => $user->email,
            'user_name' => $user->nombre. ' '. $user->apellidos,
            'is_logged' => true
        ]);
	}
}
