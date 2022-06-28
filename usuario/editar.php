 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../favicon.ico">
   <script src="../js/jquery.inputmask.min.js"></script>
   <script src="../js/jquery-3.6.0.min.js"></script>
   <title>Alterar Usuário | Academia Fitness</title>
 </head>

 <body>
   <h2>Alterar usuário</h2>
   <?php
    include('../config.php');

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $sql = "SELECT nome, email, endereco, telefone, versao_lista, data_inicio, data_saida, data_nascimento, mensalidade, atraso_pagamento, ativo FROM usuario WHERE id = $id;";
      if ($result = $conexao->query($sql)) {
        $coluna = $result->fetch_row();
        $nome = $coluna[0];
        $email = $coluna[1];
        $endereco = $coluna[2];
        $telefone = $coluna[3];
        $versao_lista = $coluna[4];
        $data_inicio = $coluna[5];
        $data_saida = $coluna[6];
        $data_nascimento = $coluna[7];
        $mensalidade = $coluna[8];
        $atraso_pagamento = $coluna[9];
        $ativo = $coluna[10];
      }
    }
    ?>
   <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
     <label for="nome">Nome*</label>
     <input type="text" name="nome" id="nome" required="true" value="<?php echo $nome; ?>" maxlength="60" />
     <br /><br />

     <label for="email">E-mail*</label>
     <input type="email" name="email" id="email" required="true" value="<?php echo $email; ?>" maxlength="320" />
     <br /><br />

     <label for="endereco">Endereço*</label>
     <input type="text" name="endereco" id="endereco" required value="<?php echo $endereco; ?>" maxlength="100" />
     <br /><br />

     <label for="telefone">Telefone*</label>
     <input type="number" name="telefone" id="telefone" required value="<?php echo $telefone; ?>" maxlength="13" />
     <br /><br />

     <label for="versao_lista">Número da lista*</label>
     <input type="number" name="versao_lista" id="versao_lista" required value="<?php echo $versao_lista; ?>" />
     <br /><br />

     <label for="data_inicio">Data de início*</label>
     <input type="date" name="data_inicio" id="data_inicio" required value="<?php echo $data_inicio; ?>" />
     <br /><br />

     <label for="data_saida">Data de saída</label>
     <input type="date" name="data_saida" id="data_saida" value="<?php echo $data_saida; ?>" />
     <br /><br />

     <label for="data_nascimento">Data de nascimento*</label>
     <input type="date" name="data_nascimento" id="data_nascimento" required value="<?php echo $data_nascimento; ?>" />
     <br /><br />

     <label for="mensalidade">Mensalidade*</label>
     <input type="text" name="mensalidade" id="mensalidade" required value="<?php echo $mensalidade; ?>" maxlength="6" />
     <br /><br />

     <label for="atraso_pagamento">Pagamento atrasado?</label>
     <input type="hidden" name="atraso_pagamento" id="atraso_pagamento" value="0" />
     <input type="checkbox" name="atraso_pagamento" id="atraso_pagamento" value="1" <?php echo ($atraso_pagamento == 1 ? 'checked' : ''); ?> />
     <br /><br />

     <label for="ativo">Ativo?</label>
     <!-- 
    O hidden input serve para o checkbox não enviar um valor vazio para o servidor 

    A função 'checked' abaixo insere a palavra "checked" no argumento do input se o campo do dado for "1", marcando a caixa.
     -->
     <input type="hidden" name="ativo" id="ativo" value="0" />
     <input type="checkbox" name="ativo" id="ativo" value="1" <?php echo ($ativo == 1 ? 'checked' : ''); ?> />
     <br /><br />

     <button type="button" onclick="location.href='../index.php'">Voltar</button>
     <button type="submit">Salvar</button>
   </form>
 </body>

 </html>