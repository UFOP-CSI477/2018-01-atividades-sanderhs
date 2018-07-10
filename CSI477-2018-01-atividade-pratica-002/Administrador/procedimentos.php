<?php
    require_once 'menu.php';
    require_once '../assets/php/classes/classProcedures.php';

    $classProcedures= new classProcedures();
        $classProcedures= new classProcedures();

    session_start();

if(isset($_POST['edit'])){
     $classProcedures->setId($_POST['id1']);
    $classProcedures->setName($_POST['name']);
    $classProcedures->setPrice($_POST['preco']);



    if($classProcedures->edit() == 1){
        $result = "Procedimento editado com sucesso!";
    }else{
        $error = "Erro ao editar";
    }

}

if(isset($_POST['delete'])){

     $classProcedures->setId($_POST['id1']);

    if($classProcedures->delete() == 1){
        $result = "Procedimento excluido com sucesso!";
    }else{
        $error = "Erro ao editar";
    }

}
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Procedimentos</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Procedimento</th>
                                        <th>Preço</th>
                                        <th class="actions">Ações</th>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                          $stmt = $classProcedure->index();
                                         while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row->name ?></td>
                                            <td><?php echo $row->price ?></td>
                                        
                                        <td class="actions">
                                             <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm"> <a href="editarprocedimento.php?id=<?php echo $row->id ?>"> <i class="pe-7s-edit"></i>Editar</a></button>
                                            <button type="button" class="btn btn-primary btn-sm"> <a href="excluirprocedimento.php?id=<?php echo $row->id ?>"> <i class="pe-7s-edit"></i>Excluir</a></button>
                                            <br>
                                        </td>
                                        <?php } ?>
                                    </tr>              
                                    </tbody>
                                </table>

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
    var active = document.getElementById("procedimentos");
    active.classList.add("active");
</script>
