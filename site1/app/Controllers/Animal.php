<?php

namespace App\Controllers;

use App\Controllers\BaseController;
class Animal extends BaseController
{
	//nesse controler tem os metodos somente do aniamal 



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
	public function voluntariosadmn()
	{
		return view('voluntariosadmn');

	}
	public function suporte()
	{
		return view('suporte');
	}

	public function poslogin()
	{
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
		return view('animalAdmn', ['listaranimais' => $listaranimais]);
		
	}
	




	/*public function cadastro()
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
	}*/
	

}

