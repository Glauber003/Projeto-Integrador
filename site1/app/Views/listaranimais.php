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
    <!--  o JS do Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>MiauDota</title>

</head>
<style>
  .card-img-animal {
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  }
  
  .card-body-animal h3:first-child {
    font-size: 24px;
    color: #333;
  }
  
  .card-body-animal {
    background-color: #f2f2f2;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  }
  
  .card-body-animal h3:not(:first-child) {
    margin-bottom: 10px;
    font-size: 18px;
    color: #555;
  }
  
  .col-md-4-animal {
    margin-bottom: 20px;
  }
  .card-img-animal {
    max-height: 400px;
    object-fit: cover;
}
  
</style>
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
      A animais para adoação.     
      </p>
    </div>
  </div>
</section>
    

<div class="row">
<?php 
$imagens = [
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9RFHm9oq5WcJk9kLHrOZVFt8dnMmGOABAbQ&usqp=CAU',
    'https://wl-incrivel.cf.tsp.li/resize/728x/jpg/b31/0cb/624907582e90fe7da201e8b94d.jpg',
    'https://i0.wp.com/petcaramelo.com/wp-content/uploads/2018/09/Yorkshire-Terrier.jpg?resize=682%2C500&ssl=1',
    // adicione quantas URLs de imagens desejar
];

foreach ($listaranimais as $listaranimaiss) : 
    $imagem = $imagens[array_rand($imagens)];
?>
    <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 col-xl-4 col-xxl-4 col-md-4-animal">
        <div class="card mb-4 box-shadow">
            <img class="card-img-animal" src="<?php echo $imagem ?>" alt="Animal">
            <div class="card-body-animal">
                <h3 class="card-text-animal">Nome: <?php echo $listaranimaiss['nome_animal'] ?></h3>
                <h3 class="card-text-animal">---------------------------------------------------------</h3>
                <h3 class="card-text-animal">Raça: <?php echo $listaranimaiss['raca'] ?></h3>
                <h3 class="card-text-animal">---------------------------------------------------------</h3>
                <h3 class="card-text-animal">Porte: <?php echo $listaranimaiss['porte'] ?></h3>
                <h3 class="card-text-animal">---------------------------------------------------------</h3>
                <h3 class="card-text-animal">Sexo: <?php echo $listaranimaiss['sexo'] ?></h3>
                <h3 class="card-text-animal">---------------------------------------------------------</h3>
                <h3 class="card-text-animal">Idade: <?php echo $listaranimaiss['idade'] ?> anos 
                <h3 class="card-text-animal">---------------------------------------------------------</h3>
                <h3 class="card-text-animal">Descrição: <?php echo $listaranimaiss['descricao_animal'] ?></h3>
                <h3 class="card-text-animal">---------------------------------------------------------</h3>
                <h3 class="card-text-animal">Local: <?php echo $listaranimaiss['local_animal'] ?></h3>
            </div>
            <div class="card-footer-animal">
                <a class="btn btn-primary" href="#">Adote agora</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>




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

</body>
</html> 



