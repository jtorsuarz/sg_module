<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function indexaction()
    {
        return view('welcome_message');
    }

    public function index()
    {
        return view('pep');
    }
}
