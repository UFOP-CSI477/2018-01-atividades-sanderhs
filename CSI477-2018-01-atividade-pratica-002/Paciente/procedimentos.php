<?php
    require_once 'menu.php';
    require_once '../assets/php/classes/classTests.php';
    require_once '../assets/php/classes/classProcedures.php';

    $classProcedures = new classProcedures();


?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Procedimentos Disponíveis</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Nome</th>
                                        <th>Preço</th>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                          $stmt = $classProcedures->index();
                                         while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row->name ?></td>
                                            <td><?php echo $row->price ?></td>
                                        </tr>
                                        <?php } ?>
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