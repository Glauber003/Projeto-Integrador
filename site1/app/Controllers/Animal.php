<?php

namespace App\Controllers;

use App\Controllers\BaseController;
class Animal extends BaseController
{
	private $animalModel;

	public function __construct(){
		$this->animalModel = new \App\Models\AnimalModel();
	}



	public function index() {
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
	
		return view('animal', ['dados' => $dados]);
	}

	

	public function listaranimais() {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/animal/todos");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
		$response = curl_exec($ch);
		$response_array = json_decode($response, true);
	
		$dados = array();
		foreach ($response_array as $animal) {
			$listaranimais[] = array(
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
	
		return view('listaranimais', ['listaranimais' => $listaranimais]);
	}

	public function sobrenos()
	{
		return view('sobrenos');
	}

	public function voluntarios()
	{
		return view('voluntarios');

	}
	public function suporte()
	{
		return view('suporte');
	}

	public function poslogin()
	{
		return view('animalAdmn', [
				'animalAdmn'=> $this->animalModel->findAll()
		]);
	}




	public function cadastro()
	{
		return view('form');
	}
	public function enviadados_cadastro()
	{
		if($this->animalModel->save($this->request->getPost())){
			return view("cadastro_sucess_animal");

		}else{
			echo " Ocorreu um erro";
		}
	}
	

}

