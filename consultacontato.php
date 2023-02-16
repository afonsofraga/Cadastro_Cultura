<?php 

include_once("conectabanco.php")

$sql = "select * from contatos";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_nun_rows($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro artítico cultural</title>
    <link rel="stylesheet" href="estilos/paletadecores.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/estiloformularios.css">
</head>
<body>
    <header>
        <h1>Consultas</h1>
    </header>
    <section>
        <?php 
        print "$registros registros encontrados";
        ?>
    </section>


    
     <object width="100%" data="rodape.html"></object> 
</body>
</html>