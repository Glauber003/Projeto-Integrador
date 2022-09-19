<!DOCTYPE html>
<!-- saved from url=(0044)https://paulopbi.github.io/pequenos-amigos/# -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./Pequenos Amigos_files/css2" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/edit2.css'); ?>">
    <!--css-->
    <link rel="stylesheet" href="./Pequenos Amigos_files/style.css">
    <title>Pequenos Amigos</title>
  </head>

  <body>
    <header class="header">
      <div class="header-nav-logo2">
          <img src="">
          <a href="#" class="header-nav__logo2">MiauDota</a>

      </div>
      <header class="header">
        <nav class="header-nav">
          <ul class="header-nav-links">
            <li>
              <a href="" class="header-nav-link" target="_blank">Adoção</a>
            </li>
            <li>
              <a href="" class="header-nav-link" target="_blank">Doação</a>
            </li>
            <li>
              <a href="" class="header-nav-link" target="_blank">Sobre Nós</a>
            </li>
            <li>
              <a href="" class="header-nav-link" target="_blank">Volutáriado</a>
            </li>
            <li>
              <a href="" class="header-nav-link" target="_blank">Suporte</a>
            </li>
            </li></li></li></li><?php echo anchor('base_url'('logout'), 'Logout', ['class'=>'hero__btn'])?>
        </ul>
      </nav>
    </header>

    <section class="hero">
      <div class="hero-left">
        <h1 class="hero__h1">
          Encontre Um Novo
          <span class="hero__h1--color">Companheiro.</span>
        </h1>
        <img src="./Pequenos Amigos_files/underline.svg" alt="underline" class="hero__underline-img">
        <p class="hero__text">
          A empresa sem fins lucrativos <strong>pequenos amigos</strong> é
          responsavel por programas de resgate de cachorros em situação de
          abandono, aqui você podera adotar cachorros e ter um amiguinho novo
          para alegrar seu dia.     
        </p>
        <?php echo anchor('base_url'('Animal/cadastro'), 'Cadastrar Novo Animal', ['class'=>'hero__btn'])?>

          
        </button>
      </div>

      <div class="hero-right">
        <img src="https://love.doghero.com.br/wp-content/uploads/2019/10/Racoon_Filhote-2-1024x684.jpg" alt="Dogs" class="hero__dog-img">
      </div>
    </section>
    </br>

  <section class="hero">
    <div class="hero-left">
        <h1 class="hero__h2">
          <li>
            <span list-style-tipe="circle" class="hero__h1--color">Voluntários</span>
          </li>
          <p class="hero__text2">
          Segundo informações do instituto bilubilubilu Sou um parágrafo. Clique aqui para editar-me e adicionar o seu próprio texto. É fácil! Basta clicar em "Editar Texto" ou clicar duas vezes sobre mim e você poderá adicionar o seu próprio conteúdo e trocar fontes. 
          Sinta-se à vontade para arrastar-me e soltar em qualquer lugar em sua página. Sou um ótimo lugar para você contar sua história e permitir que seus clientes saibam um pouco mais sobre você.
          Este é um ótimo espaço para escrever um texto longo sobre a sua compania e seus serviços. Você pode usar esse espaço para entrar em detalhes sobre a sua empresa. Fale sobre a sua equipe e sobre os serviços prestados por você.
          Conte para seus visitantes sobre como teve a idéia de iniciar o seu negócio e o que o torna diferente de seus competidores. Faça com que sua empresa se destaque e mostre quem você é.
        </p>
        </h1>
    </div>
    <h1 class="hero__h2">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <li list-style-image="">
            <span class="hero__h1--color">Mamacita</span>
          </li>
          <p class="hero__text2">
            Cadastro de voluntarios
          </p>
        </div>
    </div>
  </div>
  </section>


  <section class="hero">
    <div class="hero-left">
      <h1 class="hero__h2">
        <li>
          <span list-style-tipe="circle" class="hero__h1--color">Animais para doação</span>
        </li>
      </h1>
    </div>
    </br>
  </section>

  <section class="shop" id="shop">
    <h1 class="heading"> Lista De <span> Animais </span> </h1>
      <div class="box-container">
      <?php foreach($animalAdmn as $animalAdmns) : ?>
        <div class="box">
          <div class="image">
            <img src="https://i0.wp.com/www.portaldodog.com.br/cachorros/wp-content/uploads/2021/03/visa%CC%83o-do-cachorro-2.jpeg?resize=626%2C626&ssl=1" alt="animal">
          </div>
          <div class="content">
            <h3>-ID Animal :<?php echo $animalAdmns ['id_animal']?>/  Nome Animal: <?php echo $animalAdmns ['nome_animal']?><h3>
            <h3>-Raça :<?php echo $animalAdmns ['raca']?>/ Porte <?php echo $animalAdmns ['porte']?> /  sexo: <?php echo $animalAdmns ['sexo']?><h3>
            <h3>-Idade: <?php echo $animalAdmns ['idade']?> anos /  sexo: <?php echo $animalAdmns ['sexo']?><h3>
            <h3>-Descrição Do Pet: <?php echo $animalAdmns ['descricao_pet']?><h3>
            <h3>-Onde se encontra?: <?php echo $animalAdmns ['local_animal']?><h3>
          </div>
        </div>
      <?php endforeach;?>
    </div>
  </section>
</body></html>