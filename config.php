<?php

$dbHost = 'localhost';   
$dbUsername = 'root';
$dbPassword = 'root';    // no Windows pode ser vazio: ''
$dbName = 'matricula_aluno';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//if ($conexao->connect_errno) {
   // echo "Erro ao conectar: " . $conexao->connect_error;
//} else {
  //  echo "Conexão feita com sucesso!";
//}

?>