 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../favicon.ico">
   <link rel="stylesheet" href="../css/style.css">
   <title>Usuário excluído | Academia Fitness</title>
 </head>

 <body>
   <?php
    include('../config.php');

    if (!isset($_GET['id'])) {
      echo "usuário não encontrado para exclusão";
    } else {
      $id = $_GET['id'];
      $sql = "DELETE FROM usuario WHERE id = $id;";
      if ($conexao->query($sql) == true) {
        echo "Usuário excluído";
      } else {
        echo "Erro ao excluir o usuário.";
      }
      $conexao->close();
    }
    ?>
   <br /><br />
   <button type="button" onclick="location.href='../index.php'">Voltar</button>
 </body>

 </html>