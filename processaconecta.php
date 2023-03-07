<?php 

require("conectabanco.php");

    session_start();
    //Recebe o valor digitado no campo nome
    $nome = $_POST['nome'];
    
    //Verificar se o usuário preencheu o campo
    if(empty($nome)){
        echo "<br>Campo nome obrigatorio";
        $_SESSION['erroCampoNome'] = "Campo nome obrigatorio";
        header("Location: cadastrousuario.php");
    }
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cadastro = date('Y-m-d H:i:s');

$sql = "insert into usuarios (nome,cpf,senha,email,cadastro) values (?,?,?,?,?)";
$stmt = $conexao->prepare($sql);
$stmt->execute([$nome,$cpf,$senha,$email,$cadastro]);

?>