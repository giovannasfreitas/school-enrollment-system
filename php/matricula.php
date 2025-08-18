<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST['submit']))
{
include_once('config.php');

// ALUNO

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];
$ano_ingresso = $_POST['ano_ingresso'];
$cpf = $_POST['cpf'];

$result = mysqli_query($conexao, "INSERT INTO aluno (nome,data_nascimento,genero,ano_ingresso,cpf) VALUES ('$nome','$data_nascimento','$genero','$ano_ingresso','$cpf')");

$id_aluno = mysqli_insert_id($conexao);

//RESPONSAVEL

$nome_responsavel = $_POST['nome_responsavel'];
$parentesco = $_POST['parentesco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf_responsavel = $_POST['cpf_responsavel'];

$result_responsavel = mysqli_query($conexao, " INSERT INTO responsavel (id_aluno,nome_responsavel,parentesco,telefone,email,cpf_responsavel) VALUES ('$id_aluno','$nome_responsavel','$parentesco','$telefone','$email','$cpf_responsavel')");

//ENDEREÇO

$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];

$result_endereco = mysqli_query ($conexao, "INSERT INTO endereco (id_aluno,cep,rua,numero,bairro,estado) VALUES ('$id_aluno','$cep','$rua','$numero','$bairro','$estado')");


header('Location: ../pages/pos-matricula.html');
exit; 

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
          <button onclick="window.location.href=('../pages/inicio.html')">
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


               <form action="matricula.php" method="POST">
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

            <div class="caixa">
              <div class="c-titulo"><p>Informações do Responsável</p></div>
              <div class="c-form">
                <label for="nome"> Nome Completo:</label>
                <input type="text" name="nome_responsavel" id="nome_responsavel" required/>

                <label for="grau-parentesco">Grau de Parentesco:</label>
                <input type="text" name="parentesco" id="grau-p" required/>

                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" placeholder="(00) 00000-0000" required/>

                <label for="email"> Email:</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="exemplo@gmail.com"
                required/>

                <label for="CPF"> CPF:</label>
                <input type="text" name="cpf_responsavel"id="cpf_responsavel" required/>
              </div>
            </div>

            <div class="caixa">
              <div class="c-titulo"><p>Endereço</p></div>
              <div class="c-form">
                <label for="nome"> CEP:</label>
                <input
                  type="number"
                  name="cep"
                  id="cep"
                  placeholder="00000-000"
                 required/>

                <label for="rua">Rua:</label>
                <input type="text" name="rua" id="rua" required/>

                <label for="numero">Número:</label>
                <input type="text" name="numero"id="numero" required/>

                <label for="bairro"> Bairro:</label>
                <input type="text" name="bairro" id="bairro" required/>

                <label for="estado"> Estado:</label>
                <input type="text" name="estado" required/>
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
              <button type="submit" name="submit">Enviar matrícula</button>
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
