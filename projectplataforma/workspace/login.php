<!doctype html>
<html>

    <head>
    
        <meta charset='utf-8'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <title> Login </title> 
        <link rel="stylesheet" href="principal.css" type="text/css">
        
        <script type="text/javascript">
 
            function validaLogin(){
                l = document.login;
                
                if (l.nome.value == ""){
                     alert("O campo nome deve ser preenchido!");
                     l.nome.focus();
                     return false;
           }
           
                
                if (l.email.value == ""){
                     alert("O campo email  deve ser preenchido!");
                     l.email.focus();
                     return false;
                }
                
                
                if (l.senha.value == ""){
                     alert("O campo senha  deve ser preenchido!");
                     l.senha.focus();
                     return false;
                }
                
                if (l.confiSenha.value != l.senha.value){
                     alert("O campo Senha e Confirma Senha devem ser os mesmos!");
                     l.confiSenha.focus();
                     return false;
                }
                
                
           document.cadastro.submit();
         
            }
 
  
         </script>
    

    </head>
    <body>
        <form  method="POST" action="recebe_dados.php" name="login">
            
            <fieldset id="Login">
                <legend> Cadastro </legend>
                <p><label for="nome"> Nome: </label><input type="text" name="nome" id="nome" size="5"></p>
                <p><label for="email"> Email: </label><input type="email" name="email" id="email" size="20"></p>
                <p><label for="senha"> Senha: </label><input type="password" name="senha" id="senha" size="20"></p>
                <p><label for="confiSenha"> Confirma Senha: </label><input type="password" name="confiSenha" id="confiSenha" size="5"></p>
                
                
                <input type="button" name="button" id="button" onclick="return validaLogin()" value="Enviar">
            </fieldset>
            
        </form>
    </body> 
</html>    m