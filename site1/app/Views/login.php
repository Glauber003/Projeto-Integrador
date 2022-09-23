<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CodeIgniter 4 Auth Video</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/edit2.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="#">

</head>



<body style="background-image:url('img/fundo_pata.jpg'); background-size: cover; display:flex">
<div style="display: flex" class="wrapper">
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container" style="margin-top: 80px">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="post">
                        
                        <!-- INCLUIR(DESCOMENTAR) A FUNÇÃO csrf_field(); -->
                        <?php echo csrf_field(); ?>
                        
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                        <div class="card card-hidden" style="position: center; min-height: 1000px; width: 1000px">
                            <div class="header text-center"><img src="img/logo_bg.png" /></div> </br></br>
                            <div style="font-size: 50px; text-align: center; font-family: 'Josefin Sans', sans-serif; color: var(--normal-green);" class="header text-center">Faça Login</div>
                                <div style="text-align: center" class="formulario">
                                    <div class="content">
                                        <div class="form-group">
                                        <span style="color: red;">
                                            <!-- INCLUIR A VARIÁVEL $msg -->
                                                <?php echo $msg ?? ''  ?>
                                            
                                            </span>
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <label style="font-size: 20px; text-align: center; font-family: 'Josefin Sans', sans-serif; color: var(--normal-green);">Email</label>
                                            <input type="text" name="email" style="font-size: 20px; text-align: left; font-family: 'Josefin Sans', sans-serif; width: 100%" placeholder="Informe seu email" class="form-control">
                                        </div>
                                        </br></br>
                                        <div class="form-group">
                                            <label style="font-size: 20px; text-align: center; font-family: 'Josefin Sans', sans-serif; color: var(--normal-green);">Senha</label>
                                            <input type="password" name="senha" style="font-size: 20px; text-align: left; font-family: 'Josefin Sans', sans-serif" placeholder="Informe sua senha" class="form-control">
                                        </div>
                                        </div>
                                        </br></br></br>
                                        <div class="footer text-center">
                                            <button style="font-size: 20px; background-color: var(--normal-green); font-family: 'Josefin Sans', sans-serif" type="submit" style="font-size: 20px; text-align: center; font-family: 'Josefin Sans', sans-serif" class="btn btn-fill btn-secondary btn-wd">Entrar</button>
                                        </div>
                                        </br></br></br></br></br>
                                        <div>
                                            <a style="font-size: 20px; text-align: center; font-family: 'Josefin Sans', sans-serif" href="<?php echo base_url('REGISTRAR')?>"> NÃO TEM CADASTRO ? CLIQUE AQUI </a>
                                        </div>
                                </div>  </div>
                            </div>
                        </div>
                    </form>
                </div>                    
            </div>
        </div>
    </div>
</div>
</body>
    <!--   Core JS Files   -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="js/light-bootstrap-dashboard.js"></script>
</html>