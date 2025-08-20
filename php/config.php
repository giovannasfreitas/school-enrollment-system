<?php

$dbHost = 'sql112.infinityfree.com';   
$dbUsername = 'if0_39745205';
$dbPassword = 'E9escolas4ber';    // no Windows pode ser vazio: ''
$dbName = 'if0_39745205_matricula_aluno';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//if ($conexao->connect_errno) {
   // echo "Erro ao conectar: " . $conexao->connect_error;
//} else {
  //  echo "Conexão feita com sucesso!";
//}

?>