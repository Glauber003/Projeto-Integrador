<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('animalAdmn',
        'animalAdmn' => $this->usuarioModel->findAll());
       // echo '<h2>Usuario Logado:'.$this->session->get('nome_usuario').'</h2>';
    }
}