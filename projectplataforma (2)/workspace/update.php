<?php
include "conecta.php";

$codigoMercadoria = $_POST["codigoMercadoria"];
$tipoMercadoria = $_POST["tipoMercadoria"];
$nomeMercadoria = $_POST["nomeMercadoria"];
$qtdeMercadoria = $_POST["qtdeMercadoria"];
$precoMercadoria = $_POST["precoMercadoria"];
$tipoNegocio = $_POST["tipoNegocio"];




$resultado = mysqli_query($conexao, "UPDATE plataforma SET tipoMercadoria='$tipoMercadoria', nomeMercadoria='$nomeMercadoria', qtdeMercadoria='$qtdeMercadoria', precoMercadoria='$precoMercadoria', tipoNegocio='$tipoNegocio' WHERE codigoMercadoria='$codigoMercadoria'") or die("Não foi possível executar a SQL: ".mysqli_error());


echo "<script>alert('Os dados foram atualizados');</script>";

header ('Location:https://projectplataforma-lucas-barros.c9users.io/opcao.php');

mysqli_close($conexao);


?>