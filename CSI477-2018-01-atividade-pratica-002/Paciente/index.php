<?php 

session_start();


/*require('../assets/php/protecao.php');
protegerPaciente();

if(isset($_GET['action']) AND $_GET['action'] == "sair"){
    session_destroy();
    header("Location: index.php");
}*/

	 require_once './menu.php';
	 require_once './conteudo.php';
	 require_once './footer.php';
?>