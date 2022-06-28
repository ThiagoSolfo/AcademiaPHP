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
   <title>Adicionar equipamento | Academia Fitness</title>
 </head>

 <body>

   <h2>Adicionar equipamentos</h2>
   <form action="adicionar_controller.php" method="post">
     <label for="nome">Nome*</label>
     <input type="text" name="nome" id="nome" required maxlength="60" />

     <label for="data_aquisicao">Data de aquisição</label>
     <input type="date" name="data_aquisicao" id="data_aquisicao" />

     <label for="ativo">Ativo?</label>
     <!-- O hidden input serve para o checkbox não enviar um valor vazio para o servidor -->
     <input type="hidden" name="ativo" id="ativo" value="0" />
     <input type="checkbox" name="ativo" id="ativo" value="1" />

     <button type="button" onclick="location.href='../index.php'">Voltar</button>
     <button type="submit">Salvar</button>
   </form>
 </body>

 </html>