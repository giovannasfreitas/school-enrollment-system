<?php 
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once('config.php');

if(isset($_POST['update']))
 {
    $id = $_POST['id_aluno'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $ano_ingresso = $_POST['ano_ingresso'];
    $cpf = $_POST['cpf'];


    $sqlUpdate = "UPDATE aluno SET nome='$nome', data_nascimento='$data_nascimento', genero='$genero', ano_ingresso='$ano_ingresso', cpf='$cpf' WHERE id_aluno='$id'";

    $result = $conexao->query($sqlUpdate);
 }
header('Location: ../pages/pos-matricula.html'); 
    exit;
?>