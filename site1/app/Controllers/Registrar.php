<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Registrar extends BaseController
{
    public function index()
    {
       
      return view('registrar');
      
     }

     public function cadastrarusuarioapi()
  {
      // Recebendo dados do formulário
      $nome = $this->request->getPost('nome');
      $cpf = $this->request->getPost('cpf');
      $rg = $this->request->getPost('rg');
      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');
      $sexo = $this->request->getPost('sexo');
      $nacionalidade = $this->request->getPost('nacionalidade');

      // Preparando dados para envio via API
      $dados = [
          'nome' => $nome,
          'cpf' => $cpf,
          'rg' => $rg,
          'email' => $email,
          'password' => $password,
          'sexo' => $sexo,
          'nacionalidade' => $nacionalidade,
        ];
      // Inicializando sessão cURL
      $ch = curl_init();

      // Configurando opções da requisição cURL
      curl_setopt($ch, CURLOPT_URL, 'http://localhost:3000/user/create');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
          'Content-Type: application/json',
      ]);

      // Enviando requisição cURL
      $api = curl_exec($ch);

      // Fechando sessão cURL
      curl_close($ch);

      // Verificando resposta da API
      if ($api) {
          return view('login');
      } else {
          // Erro ao enviar dados
          // ...
      }
  }
    
}
