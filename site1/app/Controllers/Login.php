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

            // Armazenando dados do usuário na sessão
            $api_user_data = $api_data['user'];
            session()->set('user_data', $api_user_data);

            // Redirecionando para a página de login
            return redirect()->to(base_url('login/validacao'));
        } else {
            // Erro ao enviar dados
            // ...
        }
    }

    public function validacao()
    {
        // Verificando se usuário está autenticado
        $session = session();
        if (!$session->has('user_data')) {
            return redirect()->to(base_url('login'));
        }
    
        // Obtendo dados do usuário da sessão
        $user_data = $session->get('user_data');
    
        // Enviando dados do usuário para a view
        $data = [
            'user_data' => $user_data,
        ];
    
        return view('animalAdmn', $data);
    }

    
}



    



