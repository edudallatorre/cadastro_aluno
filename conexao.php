<?php

//conexao PDO:
//$dsn = 'mysql:host=localhost;dbname=dba_aluno';
//$user = 'root';
//$pass = '';
//
//try {
//
//    $pdo = new PDO($dsn, $user, $pass);
//} catch (PDOException $ex) {
//    echo 'Erro: ' . $ex->getMessage();
//}

//conexao Mysqli:
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "dba_aluno";

//criando a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
