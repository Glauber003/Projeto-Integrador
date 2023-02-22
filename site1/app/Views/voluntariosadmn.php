<!DOCTYPE html>
<!-- saved from url=(0044)https://paulopbi.github.io/pequenos-amigos/# -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
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
      <li><a href="<?php echo base_url('listaranimais')?>"> ADOÇÃO </a></li>
      <li><a href="<?php echo base_url('login')?>"> DOAÇÃO </a></li>
      <li><a href="<?php echo base_url('voluntarios')?>"> VOLUTÁRIADO </a></li>
      <li><a href="<?php echo base_url('sobrenos')?>"> SOBRE NÓS </a></li>
      <li><a href="<?php echo base_url('suporte')?>"> SUPORTE </a></li>
      <li><a href="<?php echo base_url('login')?>"> ENTRAR </a></li>
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
        voce esta no voluntarios...   
      </p>
    </div>
  </div>
</section>



<div class="limiter">
		<div class="container-login100" style="background-image: url('images/voluntario.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="<?= base_url('/') ?>" method="post">

                    <span style="color: red;">
                        <!-- INCLUIR A VARIÁVEL $msg  -->
                        <?php echo $msg ?? ''  ?>
                        <?php if(isset($errors)) : ?>
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                    <li><?php echo $error ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>       
                    </span>

  					<span class="login100-form-title p-b-49">
				SEJA UM VOLUNTARIO
				</span>

				<div class="wrap-input100 validate-input m-b-23" data-validate="É necessário inserir seu login!">
					<span class="label-input100">Nome Completo</span>
					<input class="input100" type="text" name="nome" placeholder="Digite seu email">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="É necessário inserir seu CPF!">
					<span class="label-input100">CPF</span>
					<input class="input100" type="text" name="cpf" placeholder="Digite seu CPF">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<br>
				<div class="wrap-input100 validate-input" data-validate="É necessário inserir seu RG!">
					<span class="label-input100">RG</span>
					<input class="input100" type="text" name="rg" placeholder="Digite seu RG">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<br>
				<div class="wrap-input100 validate-input" data-validate="É necessário inserir um e-mail válido!">
					<span class="label-input100">E-mail</span>
					<input class="input100" type="text" name="email" placeholder="Digite seu e-mail.">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<br>
				<div class="wrap-input100 validate-input" data-validate="É necessário inserir uma senha!">
					<span class="label-input100">Escolha uma senha</span>
					<input class="input100" type="password" name="password" placeholder="Digite sua senha">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>

				<br>
				<br>
				<div class="wrap-input100 validate-input" data-validate="É necessário inserir seu sexo.">
					<span class="label-input100">Sexo</span>
					<input class="input100" type="text" name="sexo" placeholder="Digite sua sexo">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<br>
				<div class="wrap-input100 validate-input" data-validate="É necessário inserir sua nacionalidade">
					<span class="label-input100">Nacionalidade</span>
					<input class="input100" type="text" name="nacionalidade" placeholder="Digite sua nacionalidade">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
					
					
					<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit" class="login100-form-btn">
							CADASTRAR
						</button>
					</div>
					</div>
					</form>
			
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

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



