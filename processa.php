<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);

//testando o POST:
//echo "nome: $nome<br>";
//echo "email: $email<br>";
//echo "endereco: $endereco<br>";
//echo "cidade: $cidade<br>";
//echo "uf: $uf<br>";

$result_usuario = "INSERT INTO ALUNO (nome, email, endereco, cidade, uf) VALUES ('$nome', '$email', '$endereco', '$cidade', '$uf')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $session['msg'] = "Aluno Cadastrado com sucesso"; 
    header("Location: Cadastro_realizado.php");
}else{
    header("Location: Cadastro_realizado.php");
}