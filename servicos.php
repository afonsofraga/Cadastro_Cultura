<?php 
session_start();

if (isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
    $adm = $_SESSION['nivel'][1];
    $nome = $_SESSION['usuario'][0];

}else{
    echo '<script>window.location = "login.php"</script>';
}


?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link rel="stylesheet" href="estilos/paletadecores.css">
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>
    <?php require 'menu.php' ?>
    <form action="logout.php">
    <section>
        <div class="box"
         id="menu_servicos">
            <ul>
                <li><a href="" target=_selt rel="noopener noreferrer">Cadastros</a></li>
                <li><a href="#" target=_selt rel="noopener noreferrer">Consultas</a>
                <li><a href=""target=_selt rel="noopener noreferrer">Projetos
            </ul>
        </div>
        
    </section>
    </form>
    <?php require 'rodape.php' ?>
</body>

</html>