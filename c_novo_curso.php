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
        ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Cadastrar Curso</h2>   
                        <h5>cadastre todas as informações do curso. </h5>
                    </div>
                </div>
                <hr/>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Curso:</label>
                        <input class="form-control" placeholder="Digite Aqui..." />    
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Turno:</label>
                        <input class="form-control" placeholder="Digite Aqui..."/>
                    </div>
                </div>
                <div class="col-xs-6">
                    <left>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </left>
                </div>
            </div>
        </div>
    </body>
</html>
