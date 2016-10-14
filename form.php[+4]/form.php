<!doctype html>
<html>

    <head>
    
        <meta charset='utf-8'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <title>Formulário</title> 
        <link rel="stylesheet" href="principal.css" type="text/css">
        
        <script type="text/javascript">
 
            function validaForm(){
                d = document.cadastro;
                //valida codigo
                if (d.codigoMercadoria.value == "" || d.codigoMercadoria.value == " "){
                     alert("O campo codigo da Mercadoria  deve ser preenchido!");
                     d.codigoMercadoria.focus();
                     return false;
           }
           
                //valida tipo
                if (d.tipoMercadoria.value == ""){
                     alert("O campo tipo da Mercadoria  deve ser preenchido!");
                     d.tipoMercadoria.focus();
                     return false;
                }
                
                //valida nome
                if (d.nomeMercadoria.value == ""){
                     alert("O campo nome da Mercadoria  deve ser preenchido!");
                     d.nomeMercadoria.focus();
                     return false;
                }
                
                //valida quantidade
                if (d.qtdeMercadoria.value == ""){
                     alert("O campo quantidade da Mercadoria  deve ser preenchido!");
                     d.qtdeMercadoria.focus();
                     return false;
                }
                
                //valida preço
                if (d.precoMercadoria.value == ""){
                     alert("O campo Preço da Mercadoria  deve ser preenchido!");
                     d.precoMercadoria.focus();
                     return false;
                }
                
                
           
           document.cadastro.submit();
         
            }
 
  
         </script>
    

    </head>
    <body>
        <form  method="POST" action="recebe_dados.php" name="cadastro">
            
            <fieldset id="negocios">
                <legend> Plataforma de Negociação </legend>
                <p><label for="codigoMercadoria"> Codigo da Mercadoria: </label><input type="text" name="codigoMercadoria" id="codigoMercadoria" size="5"></p>
                <p><label for="tipoMercadoria"> Tipo da Mercadoria: </label><input type="text" name="tipoMercadoria" id="tipoMercadoria" size="20"></p>
                <p><label for="nomeMercadoria"> Nome da Mercadoria: </label><input type="text" name="nomeMercadoria" id="nomeMercadoria" size="20"></p>
                <p><label for="qtdeMercadoria"> Quantidade da Mercadoria: </label><input type="text" name="qtdeMercadoria" id="qtdeMercadoria" size="5"></p>
                <p><label for="precoMercadoria"> Preço: </label><input type="text" name="precoMercadoria" id="precoMercadoria" size="10" onkeyup="maskIt(this,event,'###.###.###,##',true,{pre:'R$', pos:''})"></p>
                <p><label for="tipoNegocio"> Tipo do Negocio: </label>
                <select name="tipoNegocio">
                    <option name="comprar"> Comprar </option>   
                    <option name="vender"> Vender </option>
                </select></p>
                <input type="button" name="button" id="button" onclick="return validaForm()" value="Enviar">
            </fieldset>
            
        </form>
    </body> 
</html>    