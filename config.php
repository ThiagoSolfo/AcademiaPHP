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
    $conexao = mysqli_connect($servername, $username, $password, $bd);

    // Checa a conexão (debug)
    if (false) {
      // A função die(); imprime um texto e encerra o script.
      die("<p style='color: red;'>Conexão falha: " . $conexao->connect_error . "</p>");
    }
