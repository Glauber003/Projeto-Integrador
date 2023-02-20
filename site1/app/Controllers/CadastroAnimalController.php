<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CadastroAnimalController extends Controller
{
  public function index()
  {
      {
          return view('Cadastrodeanimal');
      }
  }

  public function cadastrar()
  {
      // Recebendo dados do formulário
      $nome_animal = $this->request->getPost('nome_animal');
      $especie_animal = $this->request->getPost('especie_animal');
      $idade = $this->request->getPost('idade');
      $descricao_animal = $this->request->getPost('descricao_animal');
      $porte = $this->request->getPost('porte');
      $raca = $this->request->getPost('raca');
      $sexo = $this->request->getPost('sexo');
      $local_animal = $this->request->getPost('local_animal');
      $peso = $this->request->getPost('peso');

      // Preparando dados para envio via API
      $dados = [
          'nome_animal' => $nome_animal,
          'especie_animal' => $especie_animal,
          'idade' => $idade,
          'descricao_animal' => $descricao_animal,
          'porte' => $porte,
          'raca' => $raca,
          'sexo' => $sexo,
          'local_animal' => $local_animal,
          'peso' => $peso,
      ];

      // Inicializando sessão cURL
      $ch = curl_init();

      // Configurando opções da requisição cURL
      curl_setopt($ch, CURLOPT_URL, 'http://localhost:3000/animal/add');
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
        return redirect()->to('/listaranimaisadmn');
      } else {
          // Erro ao enviar dados
          // ...
      }
  }
  public function animaislista () {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/animal/todos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $response_array = json_decode($response, true);

    $dados = array();
    foreach ($response_array as $animal) {
        $dados[] = array(
            'nome_animal' => $animal['nome_animal'],
            'especie_animal' => $animal['especie_animal'],
            'idade' => $animal['idade'],
            'descricao_animal' => $animal['descricao_animal'],
            'porte' => $animal['porte'],
            'raca' => $animal['raca'],
            'sexo' => $animal['sexo'],
            'local_animal' => $animal['local_animal'],
            'peso' => $animal['peso'],
        );
    }

    curl_close($ch);

    return view('animaislista', ['dados' => $dados]);
    
}


public function listaranimaisadmnn () {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/animal/todos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $response_array = json_decode($response, true);

    $listaranimais = array();
    foreach ($response_array as $animal) {
        $dados[] = array(
            'nome_animal' => $animal['nome_animal'],
            'especie_animal' => $animal['especie_animal'],
            'idade' => $animal['idade'],
            'descricao_animal' => $animal['descricao_animal'],
            'porte' => $animal['porte'],
            'raca' => $animal['raca'],
            'sexo' => $animal['sexo'],
            'local_animal' => $animal['local_animal'],
            'peso' => $animal['peso'],
        );
    }

    curl_close($ch);

    return view('listaranimaisadmn', ['dados' => $dados]);
}  






    public function animalatualizar()
    {
        {
            return view('animalatualizar');
        }
    }

    public function atualizar()
{
    // Receber dados do formulário
    $id = $this->request->getPost('id');
    $nome_animal = $this->request->getPost('nome_animal');

    // Preparar dados para enviar à API
    $dados = array(
        'id' => $id,
        'nome_animal' => $nome_animal,
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/animal/atualizar");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados));

    $response = curl_exec($ch);

    if (curl_error($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        echo 'Success: ' . $response;
    }
    curl_close($ch);

        // Redirecionar para a página de animais após atualização
       /* return redirect()->to('/animaislista');*/
    }



}
