<?php
	require_once 'menu.php';
	require_once '../assets/php/classes/classUsers.php';
	require_once '../assets/php/classes/classProcedures.php';
	require_once '../assets/php/classes/classTests.php';
  
  session_start();
	$classProcedures= new classProcedures();

    
    $usuario= $_SESSION['id'];

	if(isset($_POST['insert'])){
        $classProcedures->setName($_POST['nome']);
		$classProcedures->setPrice($_POST['preco']);
        $classProcedures->setUser_id($usuario);

	if($classProcedures->insert()==1){

		
		$result = "Usuario cadastrado";
	}else{
		$error="Erro ao inserir";
	}

	}

?>

   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Adicionar Procedimento</h4>
                            </div>
                            <div class="content">
                                <form action="adicionarprocedimento.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" name="nome" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Preço</label>
                                                <input type="number" class="form-control" name="preco">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="insert" class="btn btn-info btn-fill pull-right">Adicionar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <?php
 	require_once 'footer.php';
 ?>

<script type="application/javascript">
    var active = document.getElementById("adicionarprocedimento");
    active.classList.add("active");
</script>


