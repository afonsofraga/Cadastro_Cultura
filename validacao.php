<?php 

//conecta banco 
include_once("conectabanco.php");

// verifica se houve post e se o usuario ou a senha é (são) vazio(s)

if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: index.php"); exit;
  }

  // Validação do usuário/senha digitados
$sql = "SELECT 'id', 'nome', 'nivel' FROM 'usuarios' WHERE ('cpf' = '". $cpf ."') AND ('senha' = '". sha1($senha) ."') AND ('ativo' = 1) LIMIT 1";
$query = mysqli_query($conexao,$sql);
if (mysqli_num_rows($query) != 1) {
  // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  echo "Login inválido!"; exit;
} else {
  // Salva os dados encontados na variável $resultado
  $resultado = mysqli_fetch_assoc($query);
}

?>