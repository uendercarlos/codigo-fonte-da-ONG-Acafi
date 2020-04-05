<?php

	
	session_start();
	include_once('conexao.php');
	
	$profissao = $_POST['profissao'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$telefone = $_POST['telefone'];
	
	
	
	
	
	
	
	$sql= "INSERT INTO cadastro(profissao, nome, idade, telefone, CREATED) 
						VALUES('$profissao', '$nome', '$idade', '$telefone', NOW())"; 
	
	
	
	$result_sql = mysqli_query($conn, $sql);

	if($result_sql == TRUE) {
		$_SESSION["cadastro_concluido"] = "$profissao";
		setcookie('cookie', $profissao, time() + 5);

		header("Location: index.php");

	}else if ($result_sql == FALSE) {
		// Consulta falhou, parar aqui 
		die ("Erro na conexão com banco de dados");
	}
	
	
	//Fechando conexão
	mysqli_close($conn);
	
	
	
	

	
?>