<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Services;

//nesse controler tem os metodos de login do usuario (e tambem logout e etc..)

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
    
    // Fazendo requisição para buscar dados atualizados da API
    $id = $user_data['id'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/user/$id");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Verificando se a requisição foi bem-sucedida
    if ($response !== false && $response != '') {
        $user_data = json_decode($response, true);
    }

    // Enviando dados do usuário para a view
    $data = [
        'user_data' => $user_data,
    ];

    return view('animalAdmn', $data);
}



    public function logout()
{
    // Removendo dados da sessão
    $session = session();
    $session->remove('user_data');
    
    // Redirecionando para a página de login
    return redirect()->to(base_url('/'));
}


public function deletar($id)
{
    // Inicializando sessão cURL
    $ch = curl_init();

    // Configurando opções da requisição cURL
    curl_setopt($ch, CURLOPT_URL, 'http://localhost:3000/user/delete/' . $id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

    // Enviando requisição cURL
    $api = curl_exec($ch);

    // Verificando resposta da API
    if ($api) {
        return redirect()->to(base_url('/'));
    } else {
        // Erro ao enviar dados
        // ...
    }
}

public function atualizar()
{
   

    // Monta o objeto JSON de dados a ser enviado para a API
    $data = [
        'id' => $this->request->getPost('id'),
        'nome' => $this->request->getPost('nome'),
        'cpf' => $this->request->getPost('cpf'),
        'rg' => $this->request->getPost('rg'),
        'sexo' => $this->request->getPost('sexo'),
        'nacionalidade' => $this->request->getPost('nacionalidade'),
    ];
    $json_data = json_encode($data);

    // Cria a requisição cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/user/update");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Executa a requisição cURL
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Verifica se a atualização foi bem sucedida
    if ($httpcode == 200 && $response != null && $response !== false && $response != '') {
    // armazene um item de sessão indicando que o usuário foi atualizado
    session()->set('user_updated', true);

    // Define uma mensagem de sucesso
    session()->setFlashdata('success', 'Dados atualizados com sucesso!');

    // Redireciona para a página de validação do login
    return redirect()->to('login/validacao');
        
    } else {
        // Exibe uma mensagem de erro
        $error_msg = 'Erro ao atualizar os dados.';
        if ($httpcode !== 200) {
            $error_msg .= ' Código HTTP: ' . $httpcode;
        }
        if ($response !== false && $response != '') {
            $error_msg .= ' Resposta: ' . $response;
        } else {
            $error_msg .= ' Resposta vazia.';
        }
        echo $error_msg;
    }
}




}



    




    



