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
    $servername = "localhost";
    $username = "root";
    $password = "password";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password);

    // Checa a conexão
    if ($conn->connect_error) {
      die("Conexão falha: " . $conn->connect_error);
    } else {
      echo "Conectado com sucesso!";
    }
    ?>

 </body>

 </html>