<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Home extends BaseController

{
    public function __construct(){
		$this->animalModel = new \App\Models\AnimalModel();
        $this->usuarioModel = new \App\Models\UsuarioModel();
	}



    public function index()
    {
        return view('animalAdmn',[
        'animalAdmn' => $this->usuarioModel->findAll()]);
       // echo '<h2>Usuario Logado:'.$this->session->get('nome_usuario').'</h2>';
    }

    public function listaranimaisadmn()
	{
		return view('listaranimaisadmn', [
				'listaranimaisadmn'=> $this->animalModel->findAll()]);

	}

    
   

	public function sobrenosadmn()
	{
		return view('sobrenosadmn');
	}

	public function voluntariosadmn()
	{
		return view('voluntariosadmn');

	}
	public function suporteadmn()
	{
		return view('suporteadmn');
	}

}


