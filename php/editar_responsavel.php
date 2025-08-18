<?php

if(!empty($_GET['id_responsavel']))
{
include_once('config.php');

$id = $_GET['id_responsavel'];

$sqlSelect = " SELECT * FROM responsavel WHERE id_responsavel = $id";

$result = $conexao->query($sqlSelect);

if($result->num_rows > 0)
{
  while ($user_data = mysqli_fetch_assoc($result))
  {
    $nome_responsavel = $user_data['nome_responsavel'];
    $parentesco = $user_data['parentesco'];
    $telefone = $user_data['telefone'];
    $email = $user_data['email'];
    $cpf_responsavel = $user_data['cpf_responsavel'];
  }
}
else
{
  header('Location: listar_alunos.php');
}

}
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/stylematricula.css" />
    <title>Matrícula</title>
  </head>
  <body>
    <header>
      <div class="topo">
        <div class="botao-voltar">
          <button onclick="window.location.href=('../php/listar_responsaveis.php')">
            <img src="../assets/images/Arrow 1.svg" alt="" /> Voltar
          </button>
        </div>
        <div class="textos">
          <h1>Formulário de Matrícula</h1>
          <p>Seu pequeno gênio está prestes a começar uma grande jornada.</p>
        </div>
      </div>
    </header>
    <main>
      <section class="form">
        <div class="area">
          <div class="area-topo">
            <div class="logo-topo"><img src="../assets/images/Logo.svg" alt="" /></div>
            <div class="texto-des">
              <p>
                Preencha o formulário abaixo para garantir a matrícula do seu
                filho. Após o envio, nossa equipe entrará em contato para
                confirmar os dados e finalizar o processo presencialmente.
              </p>
            </div>
          </div>
          <div class="form-caixas">


               <form action="saveEditar_responsavel.php" method="POST">
              
               <div class="caixa">
              <div class="c-titulo"><p>Informações do Responsável</p></div>
              <div class="c-form">
                <label for="nome"> Nome Completo:</label>
                <input type="text" name="nome_responsavel" id="nome_responsavel" value="<?php echo $nome_responsavel?>" required/>

                <label for="grau-parentesco">Grau de Parentesco:</label>
                <input type="text" name="parentesco" id="grau-p" value="<?php echo $parentesco?>" required/>

                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" placeholder="(00) 00000-0000" value="<?php echo $telefone?>" required/>

                <label for="email"> Email:</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="exemplo@gmail.com" value="<?php echo $email?>"
                required/>

                <label for="CPF"> CPF:</label>
                <input type="text" name="cpf_responsavel"id="cpf_responsavel" value="<?php echo $cpf_responsavel?>" required/>

                
              </div>
            </div>
            <input type="hidden" name="id_responsavel" value="<?php echo $id ?>">
           


          <div class="fim">
            <div class="fim-termos">
              <input type="checkbox" id="termos" required/>
              <label for="termos"
                >Li e concordo com os <a href="#">termos da escola.</a></label
              >
            </div>
            <div class="fim-botao">
              <button type="submit" name="update" >Editar matrícula</button>
            </div>
          </div>
        </div>
        </form>

      </section>
    </main>
    <footer>
      <div class="caixa-branca"></div>
    </footer>
  </body>
</html>
