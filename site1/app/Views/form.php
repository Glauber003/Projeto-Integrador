<!DOCTYPE html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="UTF-8"/>
<title>formulario</title>
</head>
<body>
    <div class="container mt-5"></div>

    <?php echo form_open('Animal/enviadados_cadastro')?>
    <div class="form-group"></div>
    <label for="nome_animal">Nome Do Animal</label>
    <input type="text" name="nome_animal" id="nome_animal" class="form-control">
   
    <?php echo form_open('Animal/cadastro')?>
    <div class="form-group"></div>
    <label for="especie_animal">especie</label>
    <input type="text" name="especie_animal" id="especie_animal" class="form-control">

    <?php echo form_open('Animal/cadastro')?>
    <div class="form-group"></div>
    <label for="idade">Idade</label>
    <input type="text" name="idade" id="idade" class="form-control">

    <?php echo form_open('Animal/cadastro')?>
    <div class="form-group"></div>
    <label for="nome_animal">Descrição Pet</label>
    <input type="text" name="descricao_pet" id="descricao_pet" class="form-control">

    <?php echo form_open('Animal/cadastro')?>
    <div class="form-group"></div>
    <label for="porte">Porte</label>
    <input type="text" name="porte" id="porte" class="form-control">

    <?php echo form_open('Animal/cadastro')?>
    <div class="form-group"></div>
    <label for="raca">Raça</label>
    <input type="text" name="raca" id="raca" class="form-control">

    <?php echo form_open('Animal/cadastro')?>
    <div class="form-group"></div>
    <label for="sexo">Sexo</label>
    <input type="sexo" name="sexo" id="sexo" class="form-control">

    <?php echo form_open('Animal/cadastro')?>
    <div class="form-group"></div>
    <label for="local_animal">Local do Animal</label>
    <input type="local_animal" name="local_animal" id="local_animal" class="form-control">

    <?php echo form_open('Animal/cadastro')?>
    <div class="form-group"></div>
    <label for="peso">Peso Estimado</label>
    <input type="peso" name="peso" id="peso" class="form-control">
    </br>
    <input type="submit" value="Salvar" >



    <?php echo form_close()?>

</body>
</html>