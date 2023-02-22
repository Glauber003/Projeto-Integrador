<!DOCTYPE html>
<!-- saved from url=(0044)https://paulopbi.github.io/pequenos-amigos/# -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="http://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="#">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/edit.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/edit2.css'); ?>">
    <!--  o JS do Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


  <title>MiauDota</title>

</head>

<style>
  @import url('http://fonts.cdnfonts.com/css/montserrat');
  
</style>

<body>
  <nav id="menu1">
    <ul>
      <li><a href=""> MiauDota </a></li> 
    </ul>
  </nav>

  <nav id="menu2">
    <ul>
      <li><a href="<?php echo base_url('listaranimaisadmn')?>"> ADOÇÃO </a></li>
      <li><a href="<?php echo base_url('cadastraranimal')?>"> DOAÇÃO </a></li>
      <li><a href="<?php echo base_url('voluntariosadmn')?>"> VOLUTÁRIADO </a></li>
      <li><a href="<?php echo base_url('sobrenosadmn')?>"> SOBRE NÓS </a></li>
      <li><a href="<?php echo base_url('suporteadmn')?>"> SUPORTE </a></li>
      </li></li></li></li><?php echo anchor('base_url'('login/validacao'), 'PERFIL', ['class'=>'hero__btn'])?>
    </ul>
  </nav>
</body>

<figure id="container">
  <img style="width: 103%" src="<?php echo base_url('img/bg_1.jpg')?>">  
  <figcaption>
    <h1 class="hero__h1">
      Encontre Um Novo
      </br>
      <span class="hero__h1--color">Companheiro.</span>
    </h1>
  </figcaption>
</figure>

    
 
<section class="hero-f">
  <div class="hero-frase">
    <div class="frase">
      <p class="frase" style="text-align: center">
        A empresa sem fins lucrativos Miaudota é responsável por programas de resgate de cachorros em situação de abandono, 
        aqui você podera adotar cachorros e ter um amiguinho novo para alegrar seu dia.     
      </p>
    </div>
  </div>
</section>


<body>

  <div class="container">
    <div class="row">

      <?php foreach ($dados as $listaranimaiss) : ?>
        <div class="col-sm-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://i0.wp.com/www.portaldodog.com.br/cachorros/wp-content/uploads/2021/03/visa%CC%83o-do-cachorro-2.jpeg?resize=626%2C626&ssl=1" alt="Animal">
            <div class="card-body">
              <h3 class="card-text">Nome do animal: <?php echo $listaranimaiss['nome_animal'] ?></h3>
              <h3 class="card-text">Raça: <?php echo $listaranimaiss['raca'] ?></h3>
              <h3 class="card-text"> Porte: <?php echo $listaranimaiss['porte'] ?></h3>
              <h3 class="card-text"> Sexo: <?php echo $listaranimaiss['sexo'] ?></h3>
              <h3 class="card-text">Idade: <?php echo $listaranimaiss['idade'] ?> anos 
              <h3 class="card-text">Sexo: <?php echo $listaranimaiss['sexo'] ?></h3>
              <h3 class="card-text">Descrição do animal: <?php echo $listaranimaiss['descricao_animal'] ?></h3>
              <h3 class="card-text">Onde se encontra?: <?php echo $listaranimaiss['local_animal'] ?></h3>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>


</body>





</br></br></br></br></br></br></br>

<footer>
  <div style="align-items: left" class="boxs">
    <h2 style="font-size:40px">Links rápidos</h2>
      <ul>
        <li style="font-size:20px"><a href="#">Adoção</a></li>
        <li style="font-size:20px"><a href="#">Doação</a></li>
        <li style="font-size:20px"><a href="#">Voluntáriado</a></li> 
        <li style="font-size:20px"><a href="#">Sobre Nós</a></li> 
      </ul>
    </h2>
  </div>

  <div class="boxs">
    <h2 style="font-size:40px">Sobre Nós</h2>
      <ul>
        <li style="font-size:20px"><a href="#">Get Into It (yuh)</a></li>
      </ul>
    </h2>
  </div>

  <div class="boxs">
    <h2 style="font-size:40px">Contatos</h2>
      <ul>
        <li style="font-size:20px"><i style="color: white" class="fa fa-whatsapp" aria-hidden="true"></i><a href="#">   (33) 99851-5585</a></li>
        <li style="font-size:20px"><i style="color: white" class="fa fa-paper-plane" aria-hidden="true"></i></i><a href="#">   nms6@aluno.ifnmg.edu.br</a></li>
        <li style="font-size:20px"><i style="color: white" class="fa fa-map-o" aria-hidden="true"></i></i><a href="#">   BR 367 - Zona Rural, Araçuaí - MG, 39600-000</a></li> 
      </ul>
    </h2>
  </div>
</footer>

<div class="footer">
  <div class="sociais">

    <div class="social">
      <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
    </div>

    <div class="social">
      <a href="#"><i class="fa fa-github fa-2x" aria-hidden="true"></i>
    </div>

    <div class="social">
      <a href="#"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
    </div>

  </div>
</div>

</body></html> 


