<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        //destruir sessão e voltar para o login
        $this->session->destroy();
        return redirect()->to('animal');
    }
}
