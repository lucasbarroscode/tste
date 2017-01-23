<!doctype html>
<html>

    <head>
    
        <meta charset='utf-8'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <title> Login </title> 
        <link rel="stylesheet" href="principal.css" type="text/css">
        
       
    

    </head>
    <body>
        <form  method="POST" action="etapa1.php">
            
            <fieldset id="Login">
                <legend> Cadastro </legend>
                <p><label for="nome"> Nome: </label><input type="text" name="nome" required id="nome" size="20"></p>
                <p><label for="email"> Email: </label><input type="email" name="email" required id="email" size="20"></p>
                <p><label for="senha"> Senha: </label><input type="password" name="senha" required id="senha" size="20"></p>
                <p><label for="confesenha"> Confirma Senha: </label><input type="password" name="confesenha" required id="confesenha" size="20"></p>
                
                
                <button type = "submit" name = "cadastro" value = "cadastro"> Cadastro </button>
            </fieldset>
            
        </form>
    </body> 
</html>    