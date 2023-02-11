<!DOCTYPE html>
<html>
<head>
  <title>Lista de Animais</title>
</head>
<body>
  <h1>Lista de Animais</h1>
  <table>
    <thead>
      <tr>
        <th>Nome do animal</th>
        <th>Espécie</th>
        <th>Idade</th>
        <th>Descrição</th>
        <th>Porte</th>
        <th>Raça</th>
        <th>Sexo</th>
        <th>Local</th>
        <th>Peso</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dados as $animal) : ?>
        <tr>
          <td><?= $animal['nome_animal'] ?></td>
          <td><?= $animal['especie_animal'] ?></td>
          <td><?= $animal['idade'] ?></td>
          <td><?= $animal['descricao_animal'] ?></td>
          <td><?= $animal['porte'] ?></td>
          <td><?= $animal['raca'] ?></td>
          <td><?= $animal['sexo'] ?></td>
          <td><?= $animal['local_animal'] ?></td>
          <td><?= $animal['peso'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
