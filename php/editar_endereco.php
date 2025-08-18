<?php

if(!empty($_GET['id_endereco']))
{
include_once('config.php');

$id = $_GET['id_endereco'];

$sqlSelect = " SELECT * FROM endereco WHERE id_endereco = $id";

$result = $conexao->query($sqlSelect);

if($result->num_rows > 0)
{
  while ($user_data = mysqli_fetch_assoc($result))
  {
    $cep = $user_data['cep'];
    $rua = $user_data['rua'];
    $numero = $user_data['numero'];
    $bairro = $user_data['bairro'];
    $estado = $user_data['estado'];
  }
}
else
{
  header('Location: listar_enderecos.php');
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

               <form action="saveEditar_endereco.php" method="POST">
              
               <div class="caixa">
              <div class="c-titulo"><p>Endereço</p></div>
              <div class="c-form">
                <label for="nome"> CEP:</label>
                <input
                  type="text"
                  name="cep"
                  id="cep"
                  placeholder="00000-000"  value="<?php echo $cep ?>"
                 required/>

                <label for="rua">Rua:</label>
                <input type="text" name="rua" id="rua" value="<?php echo $rua ?>" required/>

                <label for="numero">Número:</label>
                <input type="text" name="numero"id="numero" value="<?php echo $numero ?>" required/>

                <label for="bairro"> Bairro:</label>
                <input type="text" name="bairro" id="bairro" value="<?php echo $bairro ?>" required/>

                <label for="estado"> Estado:</label>
                <input type="text" name="estado" value="<?php echo $estado ?>" required/>

              </div>
            </div>
          </div>
        
          <input type="hidden" name="id_endereco" value="<?php echo $id ?>">

          <div class="fim">
            <div class="fim-termos">
              <input type="checkbox" id="termos" required/>
              <label for="termos"
                >Li e concordo com os <a href="#">termos da escola.</a></label
              >
            </div>
            <div class="fim-botao">
              <button type="submit" name="update">Editar matrícula</button>
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
