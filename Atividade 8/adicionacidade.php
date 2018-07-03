<?php

	require_once 'assets/php/classes/classEstados.php';
	require_once 'assets/php/classes/classCidades.php';

	$classEstados= new classEstados();
	$classCidades= new classCidades();

	if(isset($_POST['insert'])){
		$classCidades->setNome($_POST['nome']);
		$classCidades->setEstado_id($_POST['estado_id']);


	if($classCidades->insert()==1){
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

	<h1>Cadastro de Cidade</h1>
	<div class="form-group">
	<form action="adicionacidade.php" method="post"> 
	<label id="titulolabel" >Nome</label>
	<input type="text" class="form-control" name="nome" placeholder="Digite o nome">
	<br><br>
	<div class="row">
                                        <div class="col-md-12">
                                        	<div class="form-group">
                                                <label>Estado</label>
                                                <select type="date" class="form-control" name="estado_id">     
                                                <option>Selecione o estado</option>
												<?php 
												$stmt = $classEstados->index();
												while($row = $stmt->fetch(PDO::FETCH_OBJ)){
												?>
                                                <option value="<?php echo $row->id; ?>" ><?php echo $row->nome ?></option>
                                                <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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