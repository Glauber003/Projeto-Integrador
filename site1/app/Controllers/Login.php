<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data['msg'] = '';
        if($this->request->getMethod() =='post'){
            $usuarioModel = model("UsuarioModel");

            $validarUsuario = $usuarioModel->validar(
                $this->request->getPost('email'),
                $this->request->getPost('senha')
            );

            if(! $validarUsuario){
                $data['msg'] = 'Usuario e/ou senha incorretos';
            }
            else{
                //salva os dados na sessão

                $this->session->set('nome_usuario',$validarUsuario->nome_usuario);
                $this->session->set('sexo',$validarUsuario->sexo);
                
                // redrect usuario para area restrita
                return redirect()->to('admin');
            }

        }
        return view('login',$data);
    }
}
