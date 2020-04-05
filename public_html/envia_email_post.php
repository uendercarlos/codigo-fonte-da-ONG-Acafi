<?php

	
	session_start();
	include_once('conexao.php');
	
	
	$Nome = $_POST['Nome'];
	$Email = $_POST['Email'];
	$Mensagem = $_POST['Mensagem'];
	
	
	
	
	
	

	ini_set('display_errors', 1);

	error_reporting(E_ALL);

	$from = "testing @ yourdomain";

	$to = "u.carlos3@gmail.com";

	$subject = "Novo email de CONTATO da Acafi";

	$message = "
	Nome: $Nome
	Email: $Email
	Mensagem: $Mensagem";

	$headers = "De:". $from;

	mail($to, $subject, $message, $headers);

	




	
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<p style = 'color:green' >  cadastro realizado sucesso </p>";
		header ("location: index.php");
	}else{
		header ("location: index.php");
	
	}
	
	
	
	

	
?>