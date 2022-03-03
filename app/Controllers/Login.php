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

		$data = [
			'username' => $this->request->getPost('usuario'),
			'password' => $this->request->getPost('password'),
		];
		

		if($data['username'] == 'rrhh' && $data['password'] == 'rrhh'){
			session()->set([
				'is_logged' => true
			]);
			return redirect()->to(base_url('admin'));

		}else{
			return redirect()->to(base_url('login'));
		}

		
	}

	public function admin()
	{
		return view('home_admin');
	}

}
