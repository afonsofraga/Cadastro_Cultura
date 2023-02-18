<!DOCTYPE html>
<html lang="pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin</title>
    <link rel="stylesheet" href="estilos/paletadecores.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/estiloformularios.css">
</head>
<body>
    <header>
        <header>
            <h1>Cultura e Arte</h1>
         </header>
         <!--<object width="100%" data="menu.html"></object>-->
    <div class="box">
        <form action="validacao.php">
            <a href="index.php"> <img src="imagens/menuico.png"/></a>
            
            <fieldset>
                <legend>Login</legend>
                <br>
                <div class="inputBox">
                     <input value="" type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label form="cpf" class="labelInput">CPF</label>
                 </div>
                 <br>
                                 
                 <div class="inputBox"> 
                    <input value="" type="password" name="senha" id="senha" class="inputUser" required>
                    <label form="senha" class="labelInput">Senha</label>
                 </div>
                 <br>
                 <a href="esqueceusenha.html">Esqueceu sua senha?</a>
                 <br><br>
                 <input type="submit" name="submit" id="submit">
                 <br><br>
                 <input type="reset" name="reset" id="reset">
            </fieldset>
        </form>
    </div>    
</body>
</html>