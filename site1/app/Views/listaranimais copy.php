<!DOCTYPE html>
<!-- saved from url=(0044)https://paulopbi.github.io/pequenos-amigos/# -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="#">
  <link href="./Pequenos Amigos_files/css2" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/edit.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/edit2.css'); ?>">

  <!--css-->
  <link rel="stylesheet" href="./Pequenos Amigos_files/style.css">
  <title>Pequenos Amigos</title>
</head>

<body>

<section class="shop" id="#">
  <h1 class="heading"> Lista De <span> Animais </span></h1>
    <div class="container">
      <div class="row">
        <div class="possy">
            <?php foreach($listaranimais as $listaranimaiss) : ?>
                <div class="box">
                <div class="possy"style="width: 100px">
                  <img style="width: 100px" src="https://i0.wp.com/www.portaldodog.com.br/cachorros/wp-content/uploads/2021/03/visa%CC%83o-do-cachorro-2.jpeg?resize=626%2C626&ssl=1" alt="animal">
                </div>
                <div class="content">
                  <h3>-ID Animal :<?php echo $listaranimaiss ['id_animal']?>/  Nome Animal: <?php echo $listaranimaiss ['nome_animal']?><h3>
                  <h3>-Raça :<?php echo $listaranimaiss ['raca']?>/ Porte <?php echo $listaranimaiss ['porte']?> /  sexo: <?php echo $listaranimaiss ['sexo']?><h3>
                  <h3>-Idade: <?php echo $listaranimaiss ['idade']?> anos /  sexo: <?php echo $listaranimaiss ['sexo']?><h3>
                  <h3>-Descrição Do Pet: <?php echo $listaranimaiss ['descricao_pet']?><h3>
                  <h3>-Onde se encontra?: <?php echo $listaranimaiss ['local_animal']?><h3>
                </div>
              </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          Uma de três colunas
        </div>
        <div class="col-sm">
          Uma de três colunas
        </div>
        <div class="col-sm">
          Uma de três colunas
        </div>
      </div>
    </div>
</section>


</br></br></br></br></br></br></br>
<footer>

  <div class="boxs">
    <h2>Criado por:</h2>
      <ul>
        <li><a href="#">Sttrets</a></li>
        <li><a href="#">Need To Know</a></li>
        <li><a href="#">Talk Dirty</a></li> 
      </ul>
    </h2>
  </div>

  <div class="boxs">
    <h2>Redes Sociais</h2>
      <ul>
        <li><a href="#">Get Into It (yuh)</a></li>
        <li><a href="#">You Right</a></li>
        <li><a href="#">Like That</a></li> 
      </ul>
    </h2>
  </div>

  <div class="boxs">
    <h2>Suporte</h2>
      <ul>
        <li><a href="#">Payday</a></li>
        <li><a href="#">Woman</a></li>
        <li><a href="#">I Don't Do Drugs</a></li> 
      </ul>
    </h2>
  </div>

  <div class="boxs">
    <h2>Redes Sociais</h2>
      <ul>
        <li><a href="#">Love To Dream</a></li>
        <li><a href="#">Alone</a></li>
        <li><a href="#">Kiss Me More</a></li> 
      </ul>
    </h2>
  </div>
</footer>
<div class="footer">
  <h2>Logo</h2>
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