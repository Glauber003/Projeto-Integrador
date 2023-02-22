<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">



<title>Usuario</title>



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


<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?php echo session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>



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
      <li><a href="<?php echo base_url('sobrenos')?>"> SOBRE NÓS </a></li>
      <li><a href="<?php echo base_url('suporte')?>"> SUPORTE </a></li>
    </ul>
  </nav>
</body>



<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<div class="main-body">
<div class="row">
<div class="col-lg-4">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
<div class="mt-3">


<h4><?php echo $user_data['nome']; ?></h4>
<p class="text-secondary mb-1">SEJA BEM VINDO</p>
<p class="text-muted font-size-sm">AO MIAUDOTA </p>
<?php echo anchor('base_url'('cadastraranimal'), 'Cadastrar Animal', ['class'=>'btn btn-primary px-4'])?>
</br>
<?php echo anchor('base_url'('/logout'), 'Logout', ['class'=>'btn btn-outline-primary'])?>
<button onclick="confirmDelete()" class="btn btn-outline-primary">Deletar Conta</button>






</div>
</div>
<hr class="my-4">
<ul class="list-group list-group-flush">

</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Vinsule sua conta no Twitter</h6>
<span class="text-secondary"></span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Vinsule sua conta no Instagram</h6>
<span class="text-secondary"></span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Vinsule sua conta no Facebook</h6>
<span class="text-secondary"></span>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-8">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo base_url('user/atualizar'); ?>">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="<?php echo $user_data['id']; ?>" readonly>
                        <input type="hidden" name="id" value="<?php echo $user_data['id']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">NOME</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="nome" value="<?php echo $user_data['nome']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">CPF</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="cpf" value="<?php echo $user_data['cpf']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">RG</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="rg" value="<?php echo $user_data['rg']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">SEXO</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="sexo" value="<?php echo $user_data['sexo']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">NACIONALIDADE</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="nacionalidade" value="<?php echo $user_data['nacionalidade']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <button type="submit"  class="btn btn-primary px-4" >Editar dados</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<h5 class="d-flex align-items-center mb-3">ANIMAIS ADICIONADOS</h5>
<p>DOG1</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>DOG1</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>DOG1</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>DOG1</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>DOG1</p>
<div class="progress" style="height: 5px">
<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>
<script type="text/javascript">

</script>




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



<script>
    function confirmDelete() {
        if (confirm("Tem certeza que deseja excluir o usuário?")) {
            window.location.href = "<?php echo base_url('user/remover/' . $user_data['id']) ?>";
        }
    }
</script>

<script>
$(document).ready(function() {
   // verifique se o usuário foi atualizado
   if (sessionStorage.getItem('user_updated')) {
      // exiba a janela pop-up
      alert('Usuário atualizado com sucesso!');
      // limpe o item da sessão
      sessionStorage.removeItem('user_updated');
   }
});

</script>