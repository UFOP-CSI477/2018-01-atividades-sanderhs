<?php

	require_once 'classes/classEstados.php';

	$classEstados= new classEstados();

	if(isset($_POST['insert'])){
		$classEstados->setNome($_POST['nome']);
		$classEstados->setSigla($_POST['sigla']);


	if($classEstados->insert()==1){
		$result = "Usuario cadastrado";
	}else{
		$error="Erro ao inserir";
	}

	}

?>

<!DOCTYPE html>
<html>


<head>
	<title>cadastro</title>
</head>
<body>
<form action="adicionaestado.php" method="post">
  Nome: <input type="text" name="nome"><br>
  sigla: <input type="text" name="sigla"><br>

  <button type="submit" name="insert">enviar</button>
</form>

</body>
</html>