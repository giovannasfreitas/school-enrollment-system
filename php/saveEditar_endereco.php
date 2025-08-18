<?php 
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once('config.php');

if(isset($_POST['update']))
 {
    $id = $_POST['id_endereco'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];


    $sqlUpdate = "UPDATE endereco SET cep='$cep', rua='$rua', numero='$numero', bairro='$bairro', estado='$estado' WHERE id_endereco='$id'";

    $result = $conexao->query($sqlUpdate);
 }
 header('Location: listar_enderecos.php')

?>