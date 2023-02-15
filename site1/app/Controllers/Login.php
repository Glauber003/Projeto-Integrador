<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Services;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }



    public function login()
{
    // Recebendo dados do formulário
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    // Preparando dados para envio via API
    $dados = [
        'email' => $email,
        'password' => $password,
    ];

    // Inicializando sessão cURL
    $ch = curl_init();

    // Configurando opções da requisição cURL
    curl_setopt($ch, CURLOPT_URL, 'http://localhost:3000/user/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);

    // Enviando requisição cURL
    $api = curl_exec($ch);

    // Verificando resposta da API
    if ($api) {
        // Decodificando resposta em JSON
        $response = json_decode($api, true);

        // Armazenando token na sessão
        $api_data = json_decode($api, true);
        $token = $api_data['token'];


        // Redirecionando para a página de login
        return redirect()->to(base_url('admin'));
    }
     else {
        // Erro ao enviar dados
        // ...
    }
}



    
}



    



