<?php
 include "conecta.php";
 
 $nome= strip_tags($_POST["nome"]);
 $email= strip_tags($_POST["email"]);
 $senha= sha1(strip_tags($_POST["senha"]));
 $confesenha = sha1(strip_tags($_POST["confesenha"]));
 

	
//validação
$erro = 0;
//verificar se o email já ta cadastrado 
		$verificando = "SELECT * FROM cadastro WHERE email = '$email'";
		$selecionar = mysqli_query($conexao,$verificando);
		$array = mysqli_fetch_array($selecionar);
		$teste1 = $array['email'];
		if($teste1 == $email){
    		echo  "Esse email já existe volte para a pagina anterior.<br>";
    		$erro=1;
		}
	
	if($confesenha != $senha){
		echo "Voce deve preencher a mesma senha, volte a pagina anterior.<br>";
		$erro = 1;
		
	}
				
	if ($erro==0) {
	include "inserir.php";
	}
	
?>


