 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../favicon.ico">
   <title>Equipamento alterado | Academia Fitness</title>
 </head>

 <body>
   <?php
    include('../config.php');

    if (!isset($_GET['id'])) {
      echo "Equipamento não encontrado para edição";
    } else {
      $id = $_GET['id'];
      # Caso o equipamento edite os limites no browser, essa verificação é ativada
      if (empty($_POST['nome'])) {
        echo "Por favor, informe o nome do equipamento";
      } else if (empty($_POST['data_aquisicao'])) {
        echo "Por favor, informe a data de aquisição do equipamento";
      } else {
        # Se não houver nenhum campo obrigatório vazio, guarda os dados inseridos no input em $variáveis do PHP
        $nome = $_POST['nome'];
        $data_aquisicao = $_POST['data_aquisicao'];
        $ativo = $_POST['ativo'];

        # Guarda os dados na variável $sql
        $sql = "UPDATE equipamento SET nome = '$nome', data_aquisicao = '$data_aquisicao', ativo = '$ativo' WHERE id = $id;";

        # Envia os dados com $conexao->query($sql) e também verifica se foi enviado com o == true (debug)
        if ($conexao->query($sql) == true) {
          echo "<h2 style='color: green'>Equipamento alterado</h2>";
        } else {
          echo "<h2 style='color: red'>Erro ao alterar o equipamento.>/h2>";
        }
        $conexao->close();
      }
    }
    ?>
   <button type="button" onclick="location.href='../index.php'">Voltar</button>
 </body>

 </html>