<?php 

$hostname = "localhost";
$usuario = "root";
$passaword = "";
$bancodedados = "sitecultura";
$conexao = mysqli_connect($hostname,$usuario,$passaword,$bancodedados);

if (!$conexao) {
    print " Falha na conexão com o banco de dadsos";
}
?>
