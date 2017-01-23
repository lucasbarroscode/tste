<?php

include "conecta.php";

$codigoMercadoria = $_POST["codigoMercadoria"];

$resultado = mysqli_query($conexao,"DELETE  FROM plataforma WHERE codigoMercadoria='$codigoMercadoria'") or die ("Não foi possivel executar o SQL" .mysqli_error($conexao));
if ($resultado == TRUE){
        echo "<br> Dados removidos com sucesso";
}else{
    echo "<br> Erro para deletar";
}        

mysqli_close($conexao);
?>