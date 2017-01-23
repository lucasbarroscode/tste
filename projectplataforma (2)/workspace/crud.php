<?php
    $opcao =$_POST['tipoCRUD'];
    switch($opcao){
        case "C":
            
            $formulario = "<h3> Criar </h3>
            
            <form action='create.php' method='POST'>
                <fieldset id='negocios'>
                <legend> Plataforma de Negociação </legend>
                <p><label for='codigoMercadoria'> Codigo da Mercadoria: </label><input type='text' name='codigoMercadoria' required id='codigoMercadoria' size='5'></p>
                <p><label for='tipoMercadoria'> Tipo da Mercadoria: </label><input type='text' name='tipoMercadoria' required id='tipoMercadoria' size='20'></p>
                <p><label for='nomeMercadoria'> Nome da Mercadoria: </label><input type='text' name='nomeMercadoria' required id='nomeMercadoria' size='20'></p>
                <p><label for='qtdeMercadoria'> Quantidade da Mercadoria: </label><input type='text' name='qtdeMercadoria' required id='qtdeMercadoria' size='20'></p>
                <p><label for='precoMercadoria'> Preço: </label><input type='text' name='precoMercadoria' required id='precoMercadoria' size='10'></p>
                <p><label for='tipoNegocio'> Tipo do Negocio: </label><input type='text' name='tipoNegocio' required id='tipoNegocio' size='20'></p>
                
                <input type='submit' name='adicionar' id='adicionar' value='Adicionar'>
            </fieldset>
                <a href='opcao.php'>Voltar</a>
           </form>";
           break;
    
    
        case "R":
            $formulario = "<h3>Ler</h3>
            <form action='read.php' method='POST'>
            <input type='submit' value='Buscar'>
            <a href='form.php'>Voltar</a>
            </form>";
            break;
            
            
        case "U":
            $formulario = "<h3>Atualiza</h3>
            <form action='update.php' method='POST'>
            Código da Mercadoria:<input type='text' required name='codigoMercadoria'><br><br>
            Tipo da Mercadoria:<input type='text' required name='tipoMercadoria'><br><br>
            Nome da Mercadoria:<input type='text' required name='nomeMercadoria'><br><br>
            Quantidade da Mercadoria:<input type='text' required name='qtdeMercadoria'><br><br>
            Preço:<input type='text' required name='precoMercadoria'><br><br>
            Tipo do Negocio:<input type='text' required name='tipoNegocio'><br><br>
            <input type='submit' value='ATUALIZAR'><br><br>
            <a href='form.php'>Voltar</a>
            </form>";
            break;
            
            
        case "D":
            $formulario = "<h3>Apagar<h3>
                        <form action = 'delete.php' method='POST'>
                        Código da Mercadoria:: <input type='text' required name='codigoMercadoria'><br>
                        <input type='submit' value='Remover'>
                        <a href='form.php'>Voltar</a>
                        </form>";
        break;                
    
    }
    echo $formulario;
?> 
</html>
 </body>