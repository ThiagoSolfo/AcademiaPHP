 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../favicon.ico">
   <script src="../js/jquery.inputmask.min.js"></script>
   <script src="../js/jquery-3.6.0.min.js"></script>
   <title>Academia Fitness</title>
 </head>

 <body>
   <?php
    include('../config.php');

    # Caso o usuário edite os limites no browser, essa verificação é ativada
    if (empty($_POST['nome'])) {
      echo "Por favor, informe o nome do usuário";
    } else if (empty($_POST['email'])) {
      echo "Por favor, informe o e-mail do usuário";
    } else if (empty($_POST['endereco'])) {
      echo "Por favor, informe o endereço do usuário";
    } else if (empty($_POST['telefone'])) {
      echo "Por favor, informe o telefone do usuário";
    } else if (empty($_POST['versao_lista'])) {
      echo "Por favor, informe a versão da lista do usuário";
    } else if (empty($_POST['data_inicio'])) {
      echo "Por favor, informe o data de início do usuário";
    } else if (empty($_POST['data_nascimento'])) {
      echo "Por favor, informe o data de nascimento do usuário";
    } else if (empty($_POST['mensalidade'])) {
      echo "Por favor, informe o mensalidade do usuário";
    } else {
      # Se não houver nenhum campo obrigatório vazio, guarda os dados inseridos no input em $variáveis do PHP
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $endereco = $_POST['endereco'];
      $telefone = $_POST['telefone'];
      $versao_lista = $_POST['versao_lista'];
      $data_inicio = $_POST['data_inicio'];
      $data_saida = $_POST['data_saida'];
      $data_nascimento = $_POST['data_nascimento'];
      $mensalidade = $_POST['mensalidade'];
      $atraso_pagamento = $_POST['atraso_pagamento'];
      $ativo = $_POST['ativo'];

      # Converte as datas em formato brasileiro para o formato do MySQL
      $data_inicio = date("Y-m-d", strtotime($data_inicio));
      $data_saida = date("Y-m-d", strtotime($data_saida));
      $data_nascimento = date("Y-m-d", strtotime($data_nascimento));

      # Converte a vírgula em ponto para o MySQL
      $mensalidade = str_replace([','], '.', $mensalidade);

      # Guarda os dados na variável $sql
      $sql = "INSERT INTO usuario (nome, email, endereco, telefone, versao_lista, data_inicio, data_saida, data_nascimento, mensalidade, atraso_pagamento, ativo) 
  VALUES ('$nome', '$email', '$endereco', '$telefone', '$versao_lista', '$data_inicio', '$data_saida', '$data_nascimento', '$mensalidade', '$atraso_pagamento', '$ativo');";

      # Envia os dados com $conexao->query($sql) e também verifica se foi enviado com o == true (debug)
      if ($conexao->query($sql) == true) {
        echo "<p style='color: green'>Usuário adicionado!</p>";
      } else {
        echo "<p style='color: red'>Erro ao adicionar o usuário, tente novamente.</p>";
      }
      $conexao->close();
    }
    ?>
   <button type="button" onclick="location.href='../index.php'">Voltar</button>
 </body>

 </html>