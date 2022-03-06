<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UsuarioEntity extends Entity
{
    
    protected function setPassword(string $password){

        $this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);

    }

    protected function getPassword(){

        return $this->attributes['password'];

    }
}
