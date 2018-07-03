<?php

	require_once 'assets/php/classes/classAlunos.php';
	require_once 'assets/php/classes/classCidades.php';

	$classAlunos= new classAlunos();
	$classCidades= new classCidades();

	if(isset($_POST['insert'])){
		$classAlunos->setNome($_POST['nome']);
		$classAlunos->setRua($_POST['rua']);
		$classAlunos->setNumero($_POST['numero']);
		$classAlunos->setBairro($_POST['bairro']);
		$classAlunos->setCidade_id($_POST['cidade_id']);
		$classAlunos->setCep($_POST['cep']);
		$classAlunos->setMail($_POST['email']);

	if($classAlunos->insert()==1){
		$result = "Inserido com sucesso";
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

	<h1>Cadastro de Alunos</h1>
	<div class="form-group">
	<form action="adicionaaluno.php" method="post"> 
	<label id="titulolabel" >Nome</label>
	<input type="text" class="form-control" name="nome" placeholder="Digite o nome">
	<br><br>
	<label id="titulolabel" >Endereço</label>
	<input type="text" class="form-control" name="rua" placeholder="Digite o endereco">
	<br><br>
	<label id="titulolabel" >Número</label>
	<input type="text" class="form-control" name="numero" placeholder="Digite o numero">
	<br><br>
	<label id="titulolabel" >Bairro</label>
	<input type="text" class="form-control" name="bairro" placeholder="Digite o bairro">
	<br><br>
	<div class="row">
                                        <div class="col-md-12">
                                        	<div class="form-group">
                                                <label>Cidade</label>
                                                <select type="date" class="form-control" name="cidade_id">     
                                                <option>Selecione a cidade</option>
												<?php 
												$stmt = $classCidades->index();
												while($row = $stmt->fetch(PDO::FETCH_OBJ)){
												?>
                                                <option value="<?php echo $row->id; ?>" ><?php echo $row->nome ?></option>
                                                <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
	<br><br>
	<label id="titulolabel" >Cep</label>
	<input type="text" class="form-control" name="cep" placeholder="Digite o cep">
	<br><br>
	<label id="titulolabel" >E-mail</label>
	<input type="text" class="form-control" name="email" placeholder="Digite o email">
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