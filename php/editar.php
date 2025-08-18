<?php

if(!empty($_GET['id_aluno']))
{
include_once('config.php');

$id = $_GET['id_aluno'];

$sqlSelect = " SELECT * FROM aluno WHERE id_aluno = $id";

$result = $conexao->query($sqlSelect);

if($result->num_rows > 0)
{
  while ($user_data = mysqli_fetch_assoc($result))
  {
    $nome = $user_data['nome'];
    $data_nascimento = $user_data['data_nascimento'];
    $genero = $user_data['genero'];
    $ano_ingresso = $user_data['ano_ingresso'];
    $cpf = $user_data['cpf'];
  }
  print_r($nome);
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
          <button onclick="window.location.href=('../php/listar_alunos.php')">
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
            <div class="caixa">


               <form action="editar.php" method="POST">
              <div class="c-titulo"><p>Informações do Estudante</p></div>

              <div class="c-form">
                <label for="nome"> Nome Completo:</label>
                <input
                  type="text"
                  name="nome"
                  id="nome"
                  required
                  minlength="8"
                  maxlength="50"
                  title="Digite o seu nome completo"

                  value="<?php echo $nome ?>"
                />
                <label for="data-nasc">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data-nasc" required/>

                <label for="genero">Gênero:</label>
                <select name="genero" id="genero" required>
                  <option value="" disabled selected hidden>
                    Selecione uma opção
                  </option>
                  <option value="feminino">Feminino</option>
                  <option value="masculino">Masculino</option>
                  <option value="nao-binario">Não Binário</option>
                </select>

                <label for="serie"> Série/Ano de Ingresso:</label>
                <select name="ano_ingresso" id="serie" required>
                  <option value="" disabled selected hidden>
                    Selecione uma opção
                  </option>
                  <option value="6° Ano">6° Ano</option>
                  <option value="7° Ano">7° Ano</option>
                  <option value="8° Ano">8° Ano</option>
                  <option value="9° Ano">9° Ano</option>
                </select>

                <label for="cpf">
                  CPF:</label
                >
                <input type="text" name="cpf" id="cpf"/>
              </div>
            </div>
          </div>
          
          <div class="fim">
            <div class="fim-termos">
              <input type="checkbox" id="termos" required/>
              <label for="termos"
                >Li e concordo com os <a href="#">termos da escola.</a></label
              >
            </div>
            <div class="fim-botao">
              <button type="submit" name="submit" onclick="window.location.href=('../pages/pos-matricula.html')">Enviar matrícula</button>
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
