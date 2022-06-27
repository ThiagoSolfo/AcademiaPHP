 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="favicon.ico">
   <title>Academia Fitness</title>
 </head>

 <body>
   <?php
    // Nome do servidor
    $servername = "localhost";
    // Nome do usuário do servidor
    $username = "root";
    // Senha do usuário do servidor
    $password = "password";
    // Nome do banco de dados à ser usado
    $bd = "fitness";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $bd);

    // Checa a conexão
    if ($conn->connect_error) {
      die("Conexão falha: " . $conn->connect_error);
    } else {
      echo "<p>Conectado com sucesso!</p>";
    }
    ?>

   <h1>Academia Fitness</h1>


 </body>

 </html>