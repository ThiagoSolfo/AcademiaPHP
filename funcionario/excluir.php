<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" href="../css/style.css">
  <title>Funcionário excluído | Academia Fitness</title>
</head>

<body>
  <?php
  include('../config.php');

  if (!isset($_GET['id'])) {
    echo "Funcionário não encontrado para exclusão";
  } else {
    $id = $_GET['id'];
    $sql = "DELETE FROM funcionario WHERE id = $id;";
    if ($conexao->query($sql) == true) {
      echo "<h2 style='color: green'>Funcionário excluído</h2>";
    } else {
      echo "<h2 style='color: red'>Erro ao excluir o funcionário</h2>.";
    }
    $conexao->close();
  }
  ?>
  <br /><br />
  <button type="button" onclick="location.href='../index.php'">Voltar</button>
</body>

</html>