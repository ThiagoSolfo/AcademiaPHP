 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="favicon.ico">
   <link rel="stylesheet" href="css/style.css">
   <title>Academia Fitness</title>
 </head>

 <body>

   <?php include('config.php'); ?>

   <h1>Academia Fitness</h1>
   <hr>
   <h3>Adicionar usuário</h3>
   <button onclick="location.href='usuario/adicionar.php'">Adiconar</button>
   <br /><br />
   <table border="1px">
     <tr>
       <th>Nome</th>
       <th>Opções</th>
     </tr>
     <?php
      $sql = "SELECT id, nome FROM usuario ORDER BY nome;";
      if ($resultado = $conexao->query($sql)) {
        while ($coluna = $resultado->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $coluna['nome'] . "</td>";
          echo "<td>";
          echo "<button type=\"button\" onclick=\"location.href='usuario/editar.php?id=" . $coluna['id'] . "'\">Editar</button>";
          echo "<button type=\"button\" onclick=\"location.href='usuario/excluir.php?id=" . $coluna['id'] . "'\">Excluir</button>";
          echo "</td>";
          echo "</tr>";
        }
      }
      ?>
   </table>
   </table>
   </table>

 </body>

 </html>