<?php
namespace App\Models;

use CodeIgniter\Model;

class AnimalModel extends Model
{
    protected $table      = 'cadastro_animal';
    protected $primaryKey = 'id_animal';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nome_animal', 
        'especie_animal',
        'idade',
        'descricao_pet',
        'porte',
        'raca',
        'sexo',
        'local_animal',
        'peso'
    ];

    protected $useTimestamps = false;
    

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
	
}