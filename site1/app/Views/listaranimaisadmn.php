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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/edit.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/edit2.css'); ?>">

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
      <li><a href="<?php echo base_url('listaranimaisadmn')?>"> DOAÇÃO </a></li>
      <li><a href="<?php echo base_url('voluntariosadmn')?>"> VOLUTÁRIADO </a></li>
      <li><a href="<?php echo base_url('suporteadmn')?>"> SUPORTE </a></li>
      <li><a href="<?php echo base_url('logout')?>"> LOGOUT </a></li>
    </ul>
  </nav>
</body>

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

<div class="card" style="width: 40rem; display: flex">
  <div class="card-body">
    <h5 style="width: 500px; padding: 60px; font-size: 80px" class="card-title">Animais Para Doação</h5>
      <?php foreach($listaranimaisadmn as $listaranimaisadmns) : ?>
          <div class="box">
          <div class="possy"style="width: 600px">
            <img style="width: 1000px; padding: 40px" src="https://i0.wp.com/www.portaldodog.com.br/cachorros/wp-content/uploads/2021/03/visa%CC%83o-do-cachorro-2.jpeg?resize=626%2C626&ssl=1" alt="animal">
          </div>
          <div style="line-height: 3rem; white-space: nowrap" class="content">
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-ID Animal :       <?php echo $listaranimaisadmns ['id_animal']?></p>
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-Nome do Animal:   <?php echo $listaranimaisadmns ['nome_animal']?></p>
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-Espécie:          <?php echo $listaranimaisadmns ['especie_animal']?></p>
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-Raça:             <?php echo $listaranimaisadmns ['raca']?></p>
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-Porte:            <?php echo $listaranimaisadmns ['porte']?></p>
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-Sexo:             <?php echo $listaranimaisadmns ['sexo']?></p>
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-Idade:            <?php echo $listaranimaisadmns ['idade']?></p>
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-Local:            <?php echo $listaranimaisadmns ['local_animal']?></p>
          <p style="width: 500px; padding: 40px; font-size: 50px;"  class="card-text">-Descrição Do Pet: <?php echo $listaranimaisadmns ['descricao_pet']?></p>
          <h3></h3>
          <h3><h3><?php echo anchor("Animal/editardados/".$listaranimaisadmns['id_animal'],'Editar Dados')?></h3>
          <h3><?php echo anchor("Animal/deletaranimal/".$listaranimaisadmns['id_animal'],'Exluir Animal')?></h3>
        </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>


</br></br></br></br></br></br></br>

<footer>
  
  <div class="boxs">
    <h2>Links rápidos</h2>
      <ul>
        <li><a href="<?php echo base_url('listaranimais')?>">Adoção</a></li>
        <li><a href="<?php echo base_url('listaranimais')?>">Doação</a></li>
        <li><a href="<?php echo base_url('voluntarios')?>">Voluntáriado</a></li> 
        <li><a href="<?php echo base_url('suporte')?>">Suporte</a></li> 
      </ul>
    </h2>
  </div>

  <div class="boxs">
    <h2>Contatos</h2>
      <ul>
        <li><i style="color: white" class="fa fa-whatsapp" aria-hidden="true"></i><a href="#">   (33) 99851-5585</a></li>
        <li><i style="color: white" class="fa fa-paper-plane" aria-hidden="true"></i></i><a href="#">   nms6@aluno.ifnmg.edu.br</a></li>
        <li><i style="color: white" class="fa fa-map-o" aria-hidden="true"></i></i><a href="#">   BR 367, km 278, s/n - Zona Rural</br>Araçuaí - MG, 39600-000</a></li> 
      </ul>
    </h2>
  </div>

  <div class="boxs">
    <h2>Sobre Nós</h2>
      <ul>
        <li><a>Somos um grupo de alunos do IFNMG - Campus Araçuaí e criamos essa plataforma web para o desenvolvimento do Projeto Integrador do Terceiro Período.
                Nosso foco é uma plataforma simples com diversas funcionalidades e um com uma possibilidade de crescimento gigante.
        </a></li>
      </ul>
    </h2>
  </div>

  <div class="boxs">
    <h2 style="text-align: right" >Integrantes</h2>
      <ul>
        <li style="text-align: center" ><i style="color: white" aria-hidden="true"></i><i><a href="#">   Ana Flávia</a></li>
        <li style="text-align: center" ><i style="color: white" aria-hidden="true"></i><i><a href="#">   Iara</a></li>
        <li style="text-align: center" ><i style="color: white" aria-hidden="true"></i><i><a href="#">   Glauber</a></li>
        <li style="text-align: center" ><i style="color: white" aria-hidden="true"></i><i><a href="#">   Naiane</a></li> 
        <li style="text-align: center" ><i style="color: white" aria-hidden="true"></i><i><a href="#">   Nauberth</a></li> 
      </ul>
    </h2>
  </div>
  
</footer>

<div class="footer">
  <div class="sociais">

    <div class="social">
      <a href="#"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i></a>
    </div>

    <div class="social">
      <a href="#"><i class="fa fa-github fa-4x" aria-hidden="true"></i>
    </div>

    <div class="social">
      <a href="#"><i class="fa fa-linkedin fa-4x" aria-hidden="true"></i></a>
    </div>

  </div>
</div>

</body></html> 



