<?php

	$servidor = "localhost";
	$usuario = "seu usuario";
	$senha = "sua senha";
	$dbname = "seu banco";

	//criar conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die ("Erro na conexão com banco de dados");


?>
