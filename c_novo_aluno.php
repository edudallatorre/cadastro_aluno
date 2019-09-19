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
                        <h2>Cadastrar Aluno</h2>   
                        <h5>cadastre todas as informações do aluno. </h5>
                    </div>
                </div>
                <hr/>
                <form method="POST" action="processa.php">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite Aqui..." autocomplete="off" required/>    
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Digite Aqui..." autocomplete="off" required/>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Digite Aqui..." autocomplete="off" required/>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Cidade:</label>
                        <input type="text" name="cidade" class="form-control" placeholder="Digite Aqui..." autocomplete="off" required/>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>UF:</label>
                        <input type="text" name="uf" class="form-control" placeholder="Digite Aqui..." autocomplete="off" required/>
                    </div>
                </div>
                <div class="col-xs-12">
                    <left>
                        <button type="submit" class="btn btn-success" value="Cadastrar">Salvar</button>
                    </left>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
