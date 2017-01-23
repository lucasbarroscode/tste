<?php

include "conecta.php";

$nome =$_POST["nome"];
$email = $_POST["email"];
$senha = sha1($_POST["senha"]);
$confesenha = sha1($_POST["confesenha"]);

include "conecta.php";


$sql = "INSERT INTO cadastro(nome, email, senha, confesenha) VALUES ('".$nome."', '".$email."', '".$senha."', '".$confesenha."')";
$resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar a SQL");

header ('Location:https://projectplataforma-lucas-barros.c9users.io/index.php');

mysqli_close($conexao);

?>