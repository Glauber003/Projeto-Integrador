<!DOCTYPE html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="UTF-8"/>
<title>formulario</title>
</head>
<body>
    <div class="container mt-5"></div>
    <?php echo form_open('Animal/enviadados_update')?>
    <div class="form-group"></div>
    <label for="nome_animal">Nome Do Animal</label>
    <input type="text"  value ="<?php echo $animal['nome_animal'];?>"name="nome_animal" id="nome_animal" class="form-control">
   
    
    <div class="form-group"></div>
    <label for="especie_animal">especie</label>
    <input type="text" name="especie_animal" value="<?php echo isset($animal['especie_animal']) ? $animal['especie_animal'] : ''; ?>">

    
    <div class="form-group"></div>
    <label for="idade">Idade</label>
    <input type="text" name="idade" value="<?php echo isset($animal['idade']) ? $animal['idade'] : ''; ?>">

    
    <div class="form-group"></div>
    <label for="nome_animal">Descrição Pet</label>
    <input type="text" name="nome_animal" value="<?php echo isset($animal['descricao_pet']) ? $animal['descricao_pet'] : ''; ?>">

   
    <div class="form-group"></div>
    <label for="porte">Porte</label>
    <input type="text" name="porte"value="<?php echo isset($animal['porte']) ? $animal['porte'] : ''; ?>">

    
    <div class="form-group"></div>
    <label for="raca">Raça</label>
    <input type="text" name="raca" value="<?php echo isset($animal['raca']) ? $animal['raca'] : ''; ?>">

    
    <div class="form-group"></div>
    <label for="sexo">Sexo</label>
    <input type="text" name="sexo" value="<?php echo isset($animal['sexo']) ? $animal['sexo'] : ''; ?>">

    
    <div class="form-group"></div>
    <label for="local_animal">Local do Animal</label>
    <input type="text" name="sexo" value="<?php echo isset($animal['local_animal']) ? $animal['local_animal'] : ''; ?>">

    
    <div class="form-group"></div>
    <label for="peso">Peso Estimado</label>
    <input type="peso" name="peso" value="<?php echo isset($animal['peso']) ? $animal['peso'] : ''; ?>">
    </br>
    <input type="submit" value="Salvar" >
    <input type="hidden" name="id_animal" value=" value="<?php echo isset($animal['id_animal']) ? $animal['id_animal'] : ''; ?>">

</br></br> <a href="<?php echo base_url('listaranimaisadmn')?>"> Voltar </a>
    
    <?php echo form_close()?>

</body>
</html>