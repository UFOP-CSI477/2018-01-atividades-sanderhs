<?php
    require_once 'menu.php';
    require_once '../assets/php/classes/classTests.php';
        require_once '../assets/php/classes/classProcedures.php';

    $classTests= new classTests();
    $procedure = new classProcedures();
     session_start();
    $usuario= $_SESSION['id'];


        $classTests= new classTests();
if(isset($_POST['delete'])){

     $classTests->setId($_POST['id1']);

    if($classTests->delete() == 1){
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
                                <h4 class="title">Procedimentos Agendados</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Procedimento</th>
                                        <th>Data</th>
                                       <th class="actions">Ações</th>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 

                                          $stmt = $classTests->procedimentosagendados($usuario);
                                          
                                         while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                                            $stmtProc = $procedure->index();
                                            while($rowProc = $stmtProc->fetch(PDO::FETCH_OBJ)){
                                                if($rowProc->id == $row->procedure_id){
                                        ?>
                                        <tr>

                                            <td><?php echo $rowProc->name; ?></td>
                                            <td><?php echo $row->date; ?></td>

                                            <td class="actions">
                                            <button type="button" class="btn btn-primary btn-sm"> <a href="excluirprocedimento.php?id=<?php echo $row->id ?>"> <i class="pe-7s-edit"></i>Excluir</a></button>
                                            <br>
                                          <a href=""><i class="pe-7s-edit"></i>Editar</a>
                                        </td>
                                        </tr>
                                        <?php }}} ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>





<script type="application/javascript">
    var active = document.getElementById("procedimentosagendados");
    active.classList.add("active");
</script>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> 
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="../assets/js/demo.js"></script>

    <script type="text/javascript" src="../assets/js/popper.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>

    

</html>