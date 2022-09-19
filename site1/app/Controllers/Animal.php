<?php

namespace App\Controllers;

use App\Controllers\BaseController;
class Animal extends BaseController
{
	private $animalModel;

	public function __construct(){
		$this->animalModel = new \App\Models\AnimalModel();
	}

	public function index()
	{
		return view('animal');
	}

	public function listaranimais()
	{
		return view('listaranimais', [
				'listaranimais'=> $this->animalModel->findAll()
		]);
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

