<?php

namespace App\Controllers\;

use App\Controllers\BaseController;

class Enviodeemail extends BaseController
{
    public function index()
    {
        <?php

        $email = \Config\Services::email();
        
        $email->setFrom('gpcs@aluno.ifnmg.edu.br', 'MIAUDOTA');
        $email->setTo('someone@example.com');
        $email->setCC('another@another-example.com');
        $email->setBCC('them@their-example.com');
        
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');
        
        $email->send();
    }
}