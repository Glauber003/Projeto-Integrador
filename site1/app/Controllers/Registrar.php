<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Registrar extends BaseController
{
    public function index()
    {
        $data['msg'] ='';
        if($this->request->getMethod() =='post'){
           $usuarioModel = model("UsuarioModel");
           try{
                $usuarioData = $this->request->getPost(); //pega todos os dados preenchidos no formulario e joga na variavel usuariodata;
                if($usuarioModel->save($usuarioData)){
                    $data['msg'] = 'Usuario Cadastrado com sucesso!
                     volte a pagina principal e faça login';
                }
                else{
                    $data['msg'] ='erro ao criar usuario';
                    $data['errors'] = $usuarioModel->erros();

                }
           }
           catch(Exception $e){
            $data['msg'] ='erro ao criar usuario'.$e->getMessage();
           }
        }
        return view('registrar',$data);
    }
}
