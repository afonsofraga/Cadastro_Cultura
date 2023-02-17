<?php 

include_once("conectabanco.php");

$sql = "select * from contatos";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

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
        <form action="" method="get">
            Filtrar por data: <input type="date" name="filtro" class="campo" required autofocus>
            <input type="submit" value="Pesquisar" class="btn">
        </form>


        <?php 
        print "$registros registros encontrados";

        print "<br><br>";
        while ($exibirRegistros = mysqli_fetch_array($consulta)){
            $codigo = $exibirRegistos[0];
            $nome = $exibirRegistos[1];
            $email = $exibirRegistos[2];
            $mensagem = $exibirRegistos[3];
            $dataenvio = $exibirRegistos[4];
            $horaenvio = $exibirRegistos[5];

            print "<article>";
                print "$codigo";
                print "$nome";
                print "$email";
                print "$mensagem";
                print "$dataenvio"; 
                print "$horaenvio"; 
            print "</article>";
        }
        mysqli_close($conexao);


        ?>
    </section>


    
     <object width="100%" data="rodape.html"></object> 
</body>
</html>