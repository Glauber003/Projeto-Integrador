<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Animais</title>
</head>
<body>
  <h1>Cadastro de Animais</h1>
  <form action="<?= base_url('enviarloginapicadastro') ?>" method="post">
    <div>
      <label for="nome_animal">Nome do animal:</label>
      <input type="text" id="nome_animal" name="nome_animal" value="Max">
    </div>
    <div>
      <label for="especie_animal">Espécie do animal:</label>
      <input type="text" id="especie_animal" name="especie_animal" value="Cachorro">
    </div>
    <div>
      <label for="idade">Idade do animal:</label>
      <input type="text" id="idade" name="idade" value="5">
    </div>
    <div>
      <label for="descricao_animal">Descrição do pet:</label>
      <textarea id="descricao_animal" name="descricao_animal">Max é um cachorro muito amigável e brincalhão.</textarea>
    </div>
    <div>
      <label for="porte">porte:</label>
      <input type="text" id="porte" name="porte" value="Médio">
    </div>
    </div>
    <div>
      <label for="raca">Raça do animal:</label>
      <input type="text" id="raca" name="raca" value="Labrador">
    </div>
    <div>
    <div>
      <label for="sexo">sexo:</label>
      <input type="text" id="sexo" name="sexo" value="Macho">
    </div>
    <div>
      <label for="local_animal">Local do animal:</label>
      <input type="text" id="local_animal" name="local_animal" value="São Paulo">
    </div>
    <div>
      <label for="peso">Peso do animal:</label>
      <input type="text" id="peso" name="peso" value="25">
    </div>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>