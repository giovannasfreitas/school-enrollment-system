<?php 
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once('config.php');

if(isset($_POST['update']))
 {
    $id = $_POST['id_responsavel'];
    $nome_responsavel = $_POST['nome_responsavel'];
    $parentesco = $_POST['parentesco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf_responsavel = $_POST['cpf_responsavel'];


    $sqlUpdate = "UPDATE responsavel SET nome_responsavel='$nome_responsavel', parentesco='$parentesco', telefone='$telefone', email='$email', cpf_responsavel='$cpf_responsavel'  WHERE id_responsavel='$id'";

    $result = $conexao->query($sqlUpdate);
 }
 header('Location: listar_responsaveis.php')

?>