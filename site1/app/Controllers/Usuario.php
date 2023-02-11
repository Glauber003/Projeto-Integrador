<?php

namespace App\Controllers;

use App\Controllers\BaseController;
class Usuario extends BaseController
{
	private $usuarioModel;

	public function __construct(){
		$this->usuarioModel = new \App\Models\UsuarioModel();
	}

	public function index()
	{
		return view('listarusuario', [
				'listarusuario' => $this->usuarioModel->findAll() 
		]);
	}

	public function paginainicial()
	{
		return view('paginainicial');

	}
	
}

