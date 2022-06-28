 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../favicon.ico">
   <script src="../js/jquery.inputmask.min.js"></script>
   <script src="../js/jquery-3.6.0.min.js"></script>
   <link rel="stylesheet" href="../css/style.css">
   <title>Alterar equipamento | Academia Fitness</title>
 </head>

 <body>
   <h2>Alterar equipamento</h2>
   <?php
    include('../config.php');

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $sql = "SELECT nome, data_aquisicao, ativo FROM equipamento WHERE id = $id;";
      if ($result = $conexao->query($sql)) {
        $coluna = $result->fetch_row();
        $nome = $coluna[0];
        $data_aquisicao = $coluna[1];
        $ativo = $coluna[2];
      }
    }
    ?>
   <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
     <label for="nome">Nome*</label>
     <input type="text" name="nome" id="nome" required="true" value="<?php echo $nome; ?>" maxlength="60" />

     <label for="data_aquisicao">Data de aquisição*</label>
     <input type="date" name="data_aquisicao" id="data_aquisicao" required value="<?php echo $data_aquisicao; ?>" />

     <label for="ativo">Ativo?</label>
     <!-- 
    O hidden input serve para o checkbox não enviar um valor vazio para o servidor 

    A função 'checked' abaixo insere a palavra "checked" no argumento do input se o campo do dado for "1", marcando a caixa.
     -->
     <input type="hidden" name="ativo" id="ativo" value="0" />
     <input type="checkbox" name="ativo" id="ativo" value="1" <?php echo ($ativo == 1 ? 'checked' : ''); ?> />

     <button type="button" onclick="location.href='../index.php'">Voltar</button>
     <button type="submit">Salvar</button>
   </form>
 </body>

 </html>