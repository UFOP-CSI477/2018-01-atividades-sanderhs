<?php
	require_once 'menu.php';
	require_once '../assets/php/classes/classUsers.php';
	require_once '../assets/php/classes/classProcedures.php';
	require_once '../assets/php/classes/classTests.php';


	$classUsers= new classUsers();
	$classProcedures= new classProcedures();
	$classTests= new classTests();



    session_start();
    $usuario= $_SESSION['id'];
	if(isset($_POST['insert'])){
		$classTests->setUser_id($usuario);
		$classTests->setProcedure_id($_POST['procedure_id']);
		$classTests->setDate($_POST['date']);

	if($classTests->insert()==1){
		$result = "Usuario cadastrado";
	}else{
                echo "aqui";

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
                                <h4 class="title">Solicitar Procedimento</h4>
                            </div>
                            <div class="content">
                                <form action="solicitarprocedimento.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                        	<div class="form-group">
                                                <label>Procedimento</label>
                                                <select type="date" class="form-control" name="procedure_id">     
                                                <option>Selecione o procedimento</option>
												<?php 
												$stmt = $classProcedures->index();
												while($row = $stmt->fetch(PDO::FETCH_OBJ)){
												?>
                                                <option value="<?php echo $row->id; ?>" ><?php echo $row->name ?></option>
                                                <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Data</label>
                                                <input type="date" name="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="insert" class="btn btn-info btn-fill pull-right">Agendar</button>
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
    var active = document.getElementById("solicitarprocedimento");
    active.classList.add("active");
</script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>
