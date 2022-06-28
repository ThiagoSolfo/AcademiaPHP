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