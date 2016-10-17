<?php

$operacao=$_POST["operacao"];

if (operacao == "incluir")
{

$codigoMercadoria=$_POST["codigoMercadoria"];
$tipoMercadoria=$_POST["tipoMercadoria"];
$nomeMercadoria=$_POST["nomeMercadoria"];
$qtdeMercadoria=$_POST["qtdeMercadoria"];
$precoMercadoria=$_POST["precoMercadoria"];
$tipoNegocio=$_POST["tipoNegocio"];

$conexao = mysql_connect("localhost", "root");
mysql_select_db("dbteste"); 


$sql = "INSERT INTO produto VALUES";
$sql .="('$codigoMercadoria','$tipoMercadoria', '$nomeMercadoria', '$qtdeMercadoria', '$precoMercadoria', '$tipoNegocio')";
$resultado = mysql_query ($sql);
}
elseif ($operacao=="Mostrar")





?>




    