<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once '_head.php';
        ?>
    </head>
    <body>
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">  
                        <center>
                        <h2>Aluno Cadastrado com sucesso!</h2>
                        </center>
                    </div>
                </div>
    </body>
</html>
