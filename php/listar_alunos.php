<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('config.php');

$sql = "SELECT * FROM aluno ORDER BY id_aluno DESC";

$result = $conexao->query($sql);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="../css/listagens.css">
    <title>Listagem de Alunos</title>
</head>
<body>

    <div class="botao-voltar">
       <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#050B78" class="bi bi-arrow-left-circle-fill"
      viewBox="0 0 16 16" onclick="window.location.href='../pages/listar.html'; return false;">
      <path
        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
    </svg></a>
  <h1>Listagem de Alunos</h1>
</div>

<div class="tabela">
<table class="table table-bg align-middle">
  <thead>
    <tr>
      <th scope="col">ID Aluno</th>
      <th scope="col">Nome</th>
      <th scope="col">Nascimento</th>
      <th scope="col">Gênero</th>
      <th scope="col">Ano/Ingresso</th>
      <th scope="col">CPF</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

    <?php

    while($user_data = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>".$user_data['id_aluno']."</td>";
      echo "<td>".$user_data['nome']."</td>";
      echo "<td>".$user_data['data_nascimento']."</td>";
      echo "<td>".$user_data['genero']."</td>";
      echo "<td>".$user_data['ano_ingresso']."</td>";
      echo "<td>".$user_data['cpf']."</td>";
      echo "<td> 
            <a class='btn btn-primary' href='editar.php?id=$user_data[id_aluno]' >Editar</a>
            <a class='btn btn-danger' href='' >Apagar</a>
           </td>";
      echo "</tr>";
    }
  ?>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <div class="botoes"></div>
        <button type="button" class="btn btn-primary">Editar</button>
        <button type="button" class="btn btn-danger">Apagar</button>
        </div>
        
    </td>
    </tr>
   
   
  </tbody>
</table>
</div>

</body>
</html>