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
    
    <link rel="stylesheet" href="estilos/estiloconsulta.css">
   
</head>
<body>
    <?php require 'menu.php' ?>
    <div class="container">
        <nav id="consulta">
            <ul class="menu">
                <a href="#">Menu</a>
                <a href="consultacontato.php">Consultas</a>
            </ul>
        </nav>
        <section id="consulta">
            <h2>Consultas</h2>

            <form action="" method="get" class="consulta">
                Filtrar por nome: <input type="date" name="filtro" class="campo" required autofocus>
                <input type="submit" value="Pesquisar" class="btn">
            </form>
        </section>

        <!--    <section>
            


            <?php 
                print "$registros registros encontrados";
                print "<br><br>";
                while ($exibiregistros = mysqli_fetch_array($consulta)){
                    $codigo = $exibiregistros[0];
                    $nome = $exibiregistros[1];
                    $email = $exibiregistros[2];
                    $mensagem = $exibiregistros[3];
                    $dataenvio = $exibiregistros[4];
                    $horaenvio = $exibiregistros[5];

                    print "<article>";
                        print "$codigo <br>";
                        print "Nome: $nome <br>";
                        print "Email: $email <br>";
                        print "Mensagem: $mensagem <br>";
                        print "Data de Envio: $dataenvio <br>"; 
                        print "Hora de Envio: $horaenvio <br>"; 
                    print "</article>";
                }
                mysqli_close($conexao);
            ?>
        </section>
    </div>-->
    <?php require 'rodape.php' ?>
</body>

</html>