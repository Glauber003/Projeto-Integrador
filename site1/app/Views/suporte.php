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
      <li><a href="<?php echo base_url('suporte')?>"> SUPORTE </a></li>
      <li><a href="<?php echo base_url('login')?>"> ENTRAR </a></li>
    </ul>
  </nav>
</body>


<div class="limiter">
		<div class="container-login100" style="background-image: url('images/suporte.jpg');">
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
          <li><img style="width: 250px" src="img/logo.png" alt="Logo da empresa" class="logo"></li>
          </br>
				  SUPORTE
				</span>

				<div class="wrap-input100 validate-input m-b-23" data-validate="É necessário inserir seu login!">
					<span class="label-input100">Nome Completo</span>
					<input class="input100" type="text" name="nome" placeholder="Digite seu email">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="É necessário inserir seu email.">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="cpf" placeholder="Digite seu email">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<br>
				<div class="wrap-input100 validate-input" data-validate="Informe sobre o que se trata seu contato">
					<span class="label-input100">Assunto</span>
					<input class="input100" type="text" name="rg" placeholder="Resuma seu problema">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<br>
				<div class="wrap-input100 validate-input" data-validate="Informe sobre o que se trata seu contato">
					<span class="label-input100">Descrição</span>
					<input class="input100" type="text" name="email" placeholder="Descreva seu problema">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

        </br></br></br>
        <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
          <div class="login100-form-bgbtn"></div>
          <button type="submit" class="login100-form-btn">
            Envie sua solicitação de suporte
          </button>
        </div>
        </div>
        </form>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>



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



