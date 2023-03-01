<?php

//conecta banco 
include_once("conectabanco.php");

// verifica se houve post e se o usuario ou a senha é (são) vazio(s)

if (isset($_POST['email']) && isset($_POST['senha']) && $conexao != null) {
  $query = $conexao->prepare('SELECT * FROM usuarios WHERE email = ? and senha = ?');
  $conexao->execute (array ($_POST['email'], $_POST['senha']));
  echo $query->rowCount();
}else{
  echo "não tem poste";
}
?>