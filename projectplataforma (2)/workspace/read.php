<?php
include "conecta.php";

$sql ="SELECT  * from plataforma";

$resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar a SQL: ".mysqli_error());
if ($resultado){
    while($row = mysqli_fetch_array($resultado)){
    echo "Código da Mercadoria : ".$row['codigoMercadoria']. '</br>'." - Nome da Mercadoria : ".$row['nomeMercadoria'].'</br>'."Quantidade da Mercadoria : " .$row['qtdeMercadoria'].'</br>'."Preço da Mercadoria : " .$row['precoMercadoria'].'</br>'."Tipo de Negocio : ".$row['tipoNegocio'].'</br>';
    }
    }
mysqli_close($conexao)

?>


