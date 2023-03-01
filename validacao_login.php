<?php

//conecta banco 
require("conectabanco.php");

// verifica se houve post e se o usuario ou a senha é (são) vazio(s)

if (isset($_POST['email']) && isset($_POST['senha']) && $conexao != null) {
  $query = $conexao->prepare('SELECT * FROM usuarios WHERE email = ? and senha = ?');
  $query->execute(array($_POST['email'], $_POST['senha']));
    
  if ($query->rowCount()){
    $dados = $query->fetchAll(PDO::FETCH_ASSOC)[0];
    session_start();
    $_SESSION['usuario'] = array($dados['nome'], $dados['nivel']);

    echo '<script>window.location = "servicos.php"</script>';
  }else{
    echo '<script>window.location = "login.php"</script>';
  }
}else{
  echo '<script>window.location = "login.php"</script>';
}
?>