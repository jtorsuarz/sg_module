<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
	public function index()
	{
		return view('login');
	}

	public function loggers()
	{

        if (!$this->validate([
            'usuario' => 'required',
            'password' => 'required'
        ],
        [
            'usuario' => [

                'required' => 'El correo es requerido',

            ],
            'password' => [
                'required' => 'La contraseña no es válida'
            ]

        ]
        )) {
            return redirect()->back()->with('errors', $this->validator->getErrors())
            ->withInput();
        }

		$userModel = Model('Usuario');

		$usuario = trim($this->request->getVar('usuario'));
        $password = trim($this->request->getVar('password'));

        if (!$user = $userModel->getUserBy('usuario', $usuario)) {

            return redirect()->back()->with('msg', [
                'type' => 'error',
                'content' => 'El usuario no es válido',
            ]);
        }

        if (!password_verify($password, $user->password)) {

            return redirect()->back()->with('msg', [
                'type' => 'error',
                'content' => 'La contraseña no es válida',
            ]);
        }

		$userModel->saveSession($user);

        return redirect()->route('viewDashboardAdmin');
		
	}
    
    public function logout(){

        session()->destroy();
        return redirect()->route('Login');

    }


	public function admin()
	{
		return view('dashboard_admin');
	}

}
