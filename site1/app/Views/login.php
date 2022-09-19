<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CodeIgniter 4 Auth Video</title>

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

</head>

<body style="background-color: #40535B;
      background-size: cover;

-webkit-background-size: cover; /* SAFARI / CHROME */

-moz-background-size: cover; /* FIREFOX */

-ms-background-size: cover; /* IE */

-o-background-size: cover; /* OPERA */">
<div class="wrapper">
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container" style="margin-top: 50px;">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="post">
                        
                        <!-- INCLUIR(DESCOMENTAR) A FUNÇÃO csrf_field(); -->
                        <?php echo csrf_field(); ?>
                        
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                        <div class="card card-hidden" style="position: fixed; min-height: 480px; width: 360px; margin-top: 10px; padding-bottom: 10px;">
                            <div class="header text-center"><img src="img/logo.png" /></div>
                                <div class="header text-center">Acessar Painel</div>
                                <div class="content">
                                    <div class="form-group">
                                    <span style="color: red;">
                                        <!-- INCLUIR A VARIÁVEL $msg -->
                                            <?php echo $msg ?? ''  ?>
                                        
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="Informe seu usuário" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="text" name="senha" placeholder="Informe sua senha" class="form-control">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-secondary btn-wd">Entrar</button>
                                    <div>
                                    <a href="<?php echo base_url('REGISTRAR')?>"> NÃO TEM CADASTRO ? CLIQUE AQUI </a>
                                    </div>
                                </div>
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