<?php

	require_once 'assets/php/classes/classEstados.php';

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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Formulário</title>
</head>



<body>
	<div class="container">
	<div class="col-md-12" align="center">

	<h1>Cadastro de Estados</h1>
	<div class="form-group">
	<form action="adicionaestado.php" method="post"> 
	<label id="titulolabel" >Nome</label>
	<input type="text" class="form-control" name="nome" placeholder="Digite o nome">
	<br><br>
	<label id="titulolabel" for="sigla">Sigla</label>
	<input type="text" class="form-control" name="sigla" placeholder="Digite a sigla">
	<br><br>
</div>

	<input class="btn btn-primary" type="submit" name="insert" value="Cadastrar">
	<input class="btn" type="reset" value="Limpar">
	<br><br>
	</form>
</div>
</div>
	</div>
</body>
</html>