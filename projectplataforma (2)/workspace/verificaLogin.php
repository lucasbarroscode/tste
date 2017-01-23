<?php
    if(isset($_POST['sair'])){
    	setcookie('email',"",-30000000);
    	setcookie('senha','',-9875974239529345);
    	header('Location: form.php');
    }else{
		$usuario = strip_tags($_POST['email']);
		$senha = sha1(strip_tags($_POST['senha']));
		
	    include "conecta.php";
		$query="SELECT * from cadastro WHERE  email=? AND senha=?";
		if($stmt = mysqli_prepare($conexao, $query)) {
			mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $id, $nome, $email, $senha, $confesenha);
			mysqli_stmt_fetch($stmt);
		
		include "opcao.php"; 
			  
		}else {
				echo "Usuario ou senha incorretos";
			}
			mysqli_stmt_close($stmt);
	
    }	
    
?>