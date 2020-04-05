<!DOCTYPE html>
<html lang="pt">

<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creative - Start Bootstrap Theme</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body>
	

<?php

//session_start();
error_reporting(E_ALL); 
ini_set('display_errors', 'On'); 

if ((isset($_COOKIE["usuario"]) && isset($_COOKIE["senha"])) || isset($_COOKIE['cookie'])){

            


		    	//Faz a conexão com o banco de dados
			$conn = mysqli_connect("localhost", "id9734952_acafi", "Tads.123", "id9734952_acafi") or die ("Erro na conexão com banco de dados");
			include "conexao.php";
			
			
			//Instrução MySQL
			$sql = "SELECT * FROM cadastro ORDER BY id desc";

			
			
			
			
			//Guardando as instruções em uma variável
			$rs = mysqli_query($conn, $sql); 
			
		if($rs == TRUE) {
			
			
			echo '<table class="table table-striped" border="1">
					<tr>
						<div class="btn-group" >
							<a class="btn btn-info"href="index.php">Voltar</a>
						    <!-- <a class="btn btn-primary"href="encerrarSessao.php">Encerrar Sessão</a>-->
						   
						     
						</div>

					</tr>
					
					
					<tr>
						<td><h5><strong>ID</strong></h5></td>
						<td><h5><strong>PROFISSAO</strong></h5></td>
						<td><h5><strong>NOME</strong></h5></td>
						<td><h5><strong>IDADE</strong></h5></td>
						<td><h5><strong>TELEFONE</strong></h5></td>
						<td><h5><strong>DATA</strong></h5></td>
						
						
					</tr>';
					
					
			while($reg = mysqli_fetch_assoc($rs)){
				echo '<tr>';
				echo '<td>'.$reg['id'].'</td>';
				echo '<td>'.$reg['profissao'].'</td>';
				echo '<td>'.$reg['nome'].'</td>';
				echo '<td>'.$reg['idade'].'</td>';
				echo '<td>'.$reg['telefone'].'</td>';
				echo '<td>'.$reg['CREATED'].'</td>';
				echo '</tr>';
				
			}
			echo '</table>';
			
		}else if ($rs == FALSE) {
				// Consulta falhou, parar aqui 
				die ("Erro na conexão com banco de dados");
			}
			
			//Fechando conexão
			mysqli_close($conn);




		
		} else {
		    header ("Location: login.php");
				
		    }	
	

	
?>

</body>

</html>