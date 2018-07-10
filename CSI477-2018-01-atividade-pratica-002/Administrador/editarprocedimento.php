<?php
      session_start();
    require_once 'menu.php';
    require_once '../assets/php/classes/classProcedures.php';
    $classProcedures= new classProcedures();
    $classProcedures->setId($_GET['id']);
    $procedure = $classProcedures->view();
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Atualizar Procedimento</h4>
                            </div>
                            <div class="content">
                                <form action="procedimentos.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input  type="text" name="name" value="<?php echo $produto->name ?>" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Preço</label>
                                                <input type="number" class="form-control" value="<?php echo $procedure->price ?>" name="preco">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id1" value="<?php echo $procedure->id ?>" >
                                    <button type="submit" name="edit" class="btn btn-info btn-fill pull-right">Atualizar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="application/javascript">
    var active = document.getElementById("procedimentos");
    active.classList.add("active");
</script>