<html>
<?php
include "conecta.php";


$codigoMercadoria = $_POST["codigoMercadoria"];
$tipoMercadoria = $_POST["tipoMercadoria"];
$nomeMercadoria = $_POST["nomeMercadoria"];
$qtdeMercadoria = $_POST["qtdeMercadoria"];
$precoMercadoria = $_POST["precoMercadoria"];
$tipoNegocio = $_POST["tipoNegocio"];


$sql = "INSERT INTO plataforma (codigoMercadoria,tipoMercadoria,nomeMercadoria,qtdeMercadoria,precoMercadoria,tipoNegocio) 
VALUES('".$codigoMercadoria."','".$tipoMercadoria."','".$nomeMercadoria."','".$qtdeMercadoria."','".$precoMercadoria."','".$tipoNegocio."')";
$resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar a SQL");

echo "<script language='javascript'> alert ('Os dados foram adicionados');</script>";

header ('Location:https://projectplataforma-lucas-barros.c9users.io/opcao.php');

mysqli_close($conexao);    


?>
</html>