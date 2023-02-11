<!DOCTYPE html>
<html>
<head>
  <title>Atualizar animal</title>
</head>
<body>
  <h1>Atualizar animal</h1>
  <form action="<?= base_url('enviaratualizarapi') ?>" method="post">
    <label for="id">ID do animal:</label>
    <input type="text" name="id" id="id">

    <label for="nome_animal">Novo nome do animal:</label>
    <input type="text" name="nome_animal" id="nome_animal">

    <input type="submit" value="Atualizar">

  </form>
</body>
</html>
