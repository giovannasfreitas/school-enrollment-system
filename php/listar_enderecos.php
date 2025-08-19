<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('config.php');

if (!empty($_GET['search']))
{
  $data = $_GET['search'];
  $sql = "SELECT * FROM endereco WHERE id_aluno LIKE '%$data%' or cep LIKE '%$data%' or bairro LIKE '%$data%' or estado LIKE '%$data%' ORDER BY id_aluno DESC";
}
else
{
  $sql = "SELECT * FROM endereco ORDER BY id_endereco DESC";
}

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
    <title>Document</title>
</head>
<body>

    <div class="botao-voltar">
       <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#050B78" class="bi bi-arrow-left-circle-fill"
      viewBox="0 0 16 16" onclick="window.location.href='../pages/listar.html'; return false;">
      <path
        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
    </svg></a>
  <h1>Listagem de Endereços</h1>
</div>

<div class="box-search" style="margin-bottom: 2rem;  display: flex; justify-content: center; gap: 0.4rem;">
  <input class="form-control w-25" type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar" >
  <button  onclick="searchData()" class=" btn btn-primary pesquisar"    style="background-color: #050B78; border: none; padding: 0.3rem 1rem" >
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
    </svg>
</button>
</div>
      
<div class="tabela">
<table class="table table-bg align-middle">
  <thead>
    <tr>
      <th scope="col">ID Aluno</th>
      <th scope="col">CEP</th>
      <th scope="col">Rua</th>
      <th scope="col">Número</th>
      <th scope="col">Bairro</th>
      <th scope="col">Estado</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

  <?php

    while($user_data = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>".$user_data['id_aluno']."</td>";
      echo "<td>".$user_data['cep']."</td>";
      echo "<td>".$user_data['rua']."</td>";
      echo "<td>".$user_data['numero']."</td>";
      echo "<td>".$user_data['bairro']."</td>";
      echo "<td>".$user_data['estado']."</td>";
     echo "<td> 
            <a class='btn btn-primary' href='editar_endereco.php?id_endereco=".$user_data['id_endereco']."'>Editar</a>

            <a class='btn btn-danger' href='' >Apagar</a>
           </td>";
      echo "</tr>";
    }
  ?>
  </tbody>
</table>
</div>

</body>
<script> 
  var search = document.getElementById('pesquisar');

  // Função chamada ao clicar no botão ou apertar Enter
  function searchData() {
    window.location = 'listar_enderecos.php?search=' + search.value;
  }

  // Ativa a busca ao pressionar Enter
  search.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      searchData();
    }
  });
</script>
</html>