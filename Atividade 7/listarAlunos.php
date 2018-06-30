<?php

  // Conexão - configuração
  $mysql = 'mysql:host=localhost;dbname=academico';
  $dbusername = 'sistemaweb';
  $dbpassword = '123456';

  $sqlite = 'sqlite:academico.sqlite';

  //$db = new PDO($mysql, $dbusername, $dbpassword);
  $db = new PDO($sqlite);

  //var_dump($db);

  // Controlador -> Modelo
  $alunos = $db->query("SELECT * FROM alunos ORDER by nome");

  //var_dump($alunos);

  // while ( $linha = $alunos->fetch() ) {
  //   echo $linha["id"] . " - " . $linha["nome"];
  //   echo "<br>";
  // }
  // View ->
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> <meta charset="utf-8">
  <title>Lista de alunos</title>
</head>
<body>

<table class="table">
  <h1 align="center">Relação de Alunos</h1>
  <thead>
  <tr>
    <th>ID</th>
    <th>Nome</th>
  </tr>
  </thead>
  <tbody>
<?php foreach( $alunos as $linha ): ?>

  <tr>
  <td><?= $linha['id'] ?></td>
  <td><?= $linha['nome'] ?></td>
  </tr>
      <?php endforeach ?>
  <tr>

  </tbody>

</table>
</body>
</html>

