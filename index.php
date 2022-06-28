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
   <marquee behavior="alternate" direction="down" width="100%" height="100%">
     <marquee behavior="alternate" direction="left" width="100%">
       <header>
         <img src="favicon.ico">
         <h1>Academia Fitness</h1>
         <img src="favicon.ico">
     </marquee>
   </marquee>
   </header>
   <hr>
   <div class="usuario tabela">
     <h3>Adicionar usuário</h3>
     <button class="adicionar" type="button" onclick="location.href='usuario/adicionar.php'">Adicionar</button>
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
   </div>
   <div class="funcionario tabela">
     <h3>Adicionar funcionário</h3>
     <button class="adicionar" type="button" onclick="location.href='funcionario/adicionar.php'">Adicionar</button>
     <br /><br />
     <table border="1px">
       <tr>
         <th>Nome</th>
         <th>Opções</th>
       </tr>
       <?php
        $sql = "SELECT id, nome FROM funcionario ORDER BY nome;";
        if ($resultado = $conexao->query($sql)) {
          while ($coluna = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $coluna['nome'] . "</td>";
            echo "<td>";
            echo "<button type=\"button\" onclick=\"location.href='funcionario/editar.php?id=" . $coluna['id'] . "'\">Editar</button>";
            echo "<button type=\"button\" onclick=\"location.href='funcionario/excluir.php?id=" . $coluna['id'] . "'\">Excluir</button>";
            echo "</td>";
            echo "</tr>";
          }
        }
        ?>
     </table>
   </div>
   <div class="equipamento tabela">
     <h3>Adicionar equipamento</h3>
     <button class="adicionar" type="button" onclick="location.href='equipamento/adicionar.php'">Adicionar</button>
     <br /><br />
     <table border="1px">
       <tr>
         <th>Nome</th>
         <th>Opções</th>
       </tr>
       <?php
        $sql = "SELECT id, nome FROM equipamento ORDER BY nome;";
        if ($resultado = $conexao->query($sql)) {
          while ($coluna = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $coluna['nome'] . "</td>";
            echo "<td>";
            echo "<button type=\"button\" onclick=\"location.href='equipamento/editar.php?id=" . $coluna['id'] . "'\">Editar</button>";
            echo "<button type=\"button\" onclick=\"location.href='equipamento/excluir.php?id=" . $coluna['id'] . "'\">Excluir</button>";
            echo "</td>";
            echo "</tr>";
          }
        }
        ?>
     </table>
   </div>
 </body>

 </html>