<?php

if(!empty($_GET['id_aluno']))
{
    include_once('config.php');

    $id = $_GET['id_aluno'];

    $sqlSelect = " SELECT * FROM aluno WHERE id_aluno = $id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = " DELETE FROM aluno WHERE id_aluno=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header('Location: listar_alunos.php');
}
?>