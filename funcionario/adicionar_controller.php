 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../favicon.ico">
   <title>Funcionário adicionado| Academia Fitness</title>
 </head>

 <body>
   <?php
    include('../config.php');

    # Caso o funcionário edite os limites no browser, essa verificação é ativada
    if (empty($_POST['nome'])) {
      echo "Por favor, informe o nome do funcionário";
    } else if (empty($_POST['email'])) {
      echo "Por favor, informe o e-mail do funcionário";
    } else if (empty($_POST['endereco'])) {
      echo "Por favor, informe o endereço do funcionário";
    } else if (empty($_POST['telefone'])) {
      echo "Por favor, informe o telefone do funcionário";
    } else if (empty($_POST['cpf'])) {
      echo "Por favor, informe o cpf do funcionário";
    } else if (empty($_POST['data_inicio'])) {
      echo "Por favor, informe o data de início do funcionário";
    } else if (empty($_POST['data_nascimento'])) {
      echo "Por favor, informe o data de nascimento do funcionário";
    } else if (empty($_POST['salario'])) {
      echo "Por favor, informe o salário do funcionário";
    } else {
      # Se não houver nenhum campo obrigatório vazio, guarda os dados inseridos no input em $variáveis do PHP
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $endereco = $_POST['endereco'];
      $telefone = $_POST['telefone'];
      $cpf = $_POST['cpf'];
      $data_inicio = $_POST['data_inicio'];
      $data_saida = $_POST['data_saida'];
      $data_nascimento = $_POST['data_nascimento'];
      $salario = $_POST['salario'];
      $ativo = $_POST['ativo'];

      # Converte as datas em formato brasileiro para o formato do MySQL
      $data_inicio = date("Y-m-d", strtotime($data_inicio));
      $data_saida = date("Y-m-d", strtotime($data_saida));
      $data_nascimento = date("Y-m-d", strtotime($data_nascimento));

      # Converte a vírgula em ponto para o MySQL
      $salario = str_replace([','], '.', $salario);

      # Guarda os dados na variável $sql
      $sql = "INSERT INTO funcionario (nome, email, endereco, telefone, cpf, data_inicio, data_saida, data_nascimento, salario, ativo) 
  VALUES ('$nome', '$email', '$endereco', '$telefone', '$cpf', '$data_inicio', '$data_saida', '$data_nascimento', '$salario', '$ativo');";

      # Envia os dados com $conexao->query($sql) e também verifica se foi enviado com o == true (debug)
      if ($conexao->query($sql) == true) {
        echo "<h2 style='color: green'>Funcionário adicionado!</h2>";
      } else {
        echo "<h2 style='color: red'>Erro ao adicionar o funcionário, tente novamente.</h2>";
      }
      $conexao->close();
    }
    ?>
   <button type="button" onclick="location.href='../index.php'">Voltar</button>
 </body>

 </html>