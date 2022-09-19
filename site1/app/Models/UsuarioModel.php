<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_usuario',
        'nome_usuario',
        'cpf',
        'rg',
        'email',
        'senha',
        'sexo',
        'nacionalidade'
    ];

    protected $useTimestamps = false;
    

    protected $validationRules    = [
        'nome_usuario'=> 'required',
        'email'=> 'required|is_unique[usuario.email]'
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $beforeInsert = ['hashSenha'];

    protected function hashSenha($data){
        $data['data']['senha'] = password_hash( $data['data']['senha'], PASSWORD_DEFAULT);
        return $data;
    }

    public function validar($email,$senha)
    {
        //buscar o email
        $buscaEmail = $this->where('email',$email)->first();
        if(is_null($buscaEmail)){
            return false;
        }
        //validar senha
        if(! password_verify($senha,$buscaEmail->senha)){
            return false;
        }
        return $buscaEmail;
    }
}