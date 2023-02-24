<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Registrar - CodeIgniter 4 Auth Video</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

    <meta charset="UTF-8">
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

</head>

<body style="background-color: #40535B;
      background-size: cover;

-webkit-background-size: cover; /* SAFARI / CHROME */

-moz-background-size: cover; /* FIREFOX */

-ms-background-size: cover; /* IE */

-o-background-size: cover; /* OPERA */">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/fundo_patas2.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="<?= base_url('cadastrarusuarioapi') ?>" method="post">

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
					FAÇA SEU PRIMEIRO ACESSO
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
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Esqueceu a senha?
						</a>
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
					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Ou cadastre-se usando:
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
    <!--   Core JS Files   -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="js/light-bootstrap-dashboard.js"></script>
</html>