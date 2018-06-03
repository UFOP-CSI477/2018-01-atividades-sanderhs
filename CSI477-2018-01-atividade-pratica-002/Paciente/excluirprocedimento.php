<?php
      session_start();
    require_once 'menu.php';
    require_once '../assets/php/classes/classTests.php';
    $classTests= new classTests();
    $classTests->setId($_GET['id']);
    $tests = $classTests->view();
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
                                <form action="procedimentosagendados.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input  readonly type="text" name="name" value="<?php echo $tests->name ?>" class="form-control" >
                                            </div>
                                        </div>
   
                                    </div>
                                    <input type="hidden" name="id1" value="<?php echo $tests->id ?>" >
                                    <button type="submit" name="delete" class="btn btn-info btn-fill pull-right">Deletar</button>

                                     <button type="submit" name="edit" class="btn btn-info btn-fill pull-right">Cancelar</button>
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