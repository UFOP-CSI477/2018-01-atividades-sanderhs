<?php


 /* TIPOS DE USUARIOS:
  * ADMINISTRADOR - 1
  * FUNCIONARIOS - 2
  * PACIENTE - 3
 */

 require_once 'assets/php/classes/classUsers.php';

 $classUsers = new classUsers();
  session_start();

 if(isset($_POST['login'])){

  $user = $_POST['email'];
  $senha = $_POST['password'];

  $email =(string) $classUsers->indexEmail($user)->email;
  $password =(string) $classUsers->indexEmail($user)->password;
  ECHO $email;
  echo $password;

  if($user == "" || $senha == ""){
    echo "<script>alert('Preencha todos os campos');</script>";
  }else if($email == $user && $senha == $password){
  	
  	$idu=     $tipo = $classUsers->indexEmail($user)->id;
    $tipo = $classUsers->indexEmail($user)->type;
    $_SESSION['type'] = $tipo;
    $_SESSION['id']= $idu; 
    if($tipo == 1){
      header('location:  administrador/index.php');
    }else if($tipo == 2){
      header('location: operador/index.php');
    }else if($tipo == 3){

      header('location: Paciente/index.php');
    }else{
      header('location: index.php');
    }
  }else{
    echo "<script>alert('Login ou senha incorretos');</script>";
  }
}





	require_once 'assets/php/classes/classUsers.php';

	$classUsers= new classUsers();

	if(isset($_POST['insert'])){
		$classUsers->setName($_POST['name']);
		$classUsers->setEmail($_POST['email']);
		$classUsers->setPassword($_POST['password']);
		$classUsers->setType($_POST['type']);

	if($classUsers->insert()==1){
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
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<title>Laboratório São Judas Tadeu</title>
</head>
<body>

	<div class="container-fluid">

		<div class="container d-flex justify-content-center pt-5 mt-5">

		<div class="card bg-light mb-3 " style="max-width: 18rem;">
  <div class="card-body">
  	<div class="col-md-12 text-center">
  	<img class="image-responsive" id="iconelogin" src="assets/img/SAOJUDAS.png">
  </div>
    <form action="login.php" method="post">
	  <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
	    <label for="amplitude">Login</label>
	    <input type="text" name="email" class="form-control"  placeholder="">
	  </div>
	  <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
	    <label for="tempo">Senha</label>
	    <input type="password" name="password" class="form-control"  placeholder="" >
	  </div>
	 <button type="password" class="btn btn-primary btn-block botao" value="" name="login" >Entrar</button>


	
	</form>

  </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalcadastrar" tabindex="-1" role="dialog"  data-backdrop="focus" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Dados Cadastrais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
	  <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
	    <label for="amplitude">Nome</label>
	    <input type="text" class="form-control" name="name"  placeholder="">
	  </div>
	  <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
	    <label>E-mail</label>
	    <input type="text" class="form-control" name="email" placeholder="" >
	  </div>
	  <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
	    <label>Senha</label>
	    <input type="password" class="form-control"   name="password"  required>
	  </div>
  	<input type=hidden name="type" value="3">


	
      </div>
      <div class="modal-footer">
        	 <button type="submit" class="btn btn-primary btn-block botao" name="insert"  >Cadastrar</button>
      </div>
      	</form>

    </div>
  </div>
</div>

</body>


</html>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.3.2.1.min.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="assets/js/popper.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>