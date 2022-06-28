 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../favicon.ico">
   <script src="../js/jquery.inputmask.min.js"></script>
   <script src="../js/jquery-3.6.0.min.js"></script>
   <title>Academia Fitness</title>
 </head>

 <body>

   <h2>Adicionar usuários</h2>
   <form action="adicionar_controller.php" method="post">
     <label for="nome">Nome*</label>
     <input type="text" name="nome" id="nome" required maxlength="60" />
     <br /><br />

     <label for="email">E-mail*</label>
     <input type="email" name="email" id="email" required maxlength="100" />
     <br /><br />

     <label for="endereco">Endereço*</label>
     <input type="text" name="endereco" id="endereco" required maxlength="100" />
     <br /><br />

     <label for="telefone">Telefone*</label>
     <input type="number" name="telefone" id="telefone" required maxlength="13" />
     <br /><br />

     <label for="versao_lista">Número da lista*</label>
     <input type="number" name="versao_lista" id="versao_lista" required />
     <br /><br />

     <label for="data_inicio">Data de início*</label>
     <input type="date" name="data_inicio" id="data_inicio" required />
     <br /><br />

     <label for="data_saida">Data de saída</label>
     <input type="date" name="data_saida" id="data_saida" />
     <br /><br />

     <label for="data_nascimento">Data de nascimento*</label>
     <input type="date" name="data_nascimento" id="data_nascimento" required />
     <br /><br />

     <label for="mensalidade">Mensalidade*</label>
     <input type="text" name="mensalidade" id="mensalidade" required maxlength="6" />
     <br /><br />

     <label for="atraso_pagamento">Pagamento atrasado?</label>
     <input type="hidden" name="atraso_pagamento" id="atraso_pagamento" value="0" />
     <input type="checkbox" name="atraso_pagamento" id="atraso_pagamento" value="1" />
     <br /><br />

     <label for="ativo">Ativo?</label>
     <!-- O hidden input serve para o checkbox não enviar um valor vazio para o servidor -->
     <input type="hidden" name="ativo" id="ativo" value="0" />
     <input type="checkbox" name="ativo" id="ativo" value="1" />
     <br /><br />

     <button type="button" onclick="location.href='../index.php'">Voltar</button>
     <button type="submit">Salvar</button>
   </form>
 </body>

 </html>