 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../favicon.ico">
   <title>Equipamento adicionado | Academia Fitness</title>
 </head>

 <body>
   <?php
    include('../config.php');

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

      # Converte as datas em formato brasileiro para o formato do MySQL
      $data_aquisicao = date("Y-m-d", strtotime($data_aquisicao));

      # Guarda os dados na variável $sql
      $sql = "INSERT INTO equipamento (nome, data_aquisicao, ativo) 
  VALUES ('$nome', '$data_aquisicao', '$ativo');";

      # Envia os dados com $conexao->query($sql) e também verifica se foi enviado com o == true (debug)
      if ($conexao->query($sql) == true) {
        echo "<h2 style='color: green'>Equipamento adicionado!</h2>";
      } else {
        echo "<h2 style='color: red'>Erro ao adicionar o equipamento, tente novamente.</h2>";
      }
      $conexao->close();
    }
    ?>
   <button type="button" onclick="location.href='../index.php'">Voltar</button>
 </body>

 </html>