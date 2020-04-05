
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

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">

        <div class="col-lg-8 text-center">
            <h2 class="mt-0">Favor preencha todos os campos</h2>   
        </div>
 
  </nav>
 

  <!-- About Section 
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Favor preencha os campos</h2>
          
          
        </div>
      </div>
    </div>
  </section>
-->
  
  
 
  <!-- Services Section -->
  
  <section class="page-section" id="services">
 
    <div class="container">
	

      
      <form action="processa_cadastro.php" method="POST">
          
		   <div class="form-group">
             <label for="exampleFormControlSelect1">Escolha uma das profissoes abaixo</label>
				<select class="form-control" name="profissao" id="profissao" required>
				  <option>Selecione uma...</option>
				  <option>Cantor</option>
				  <option>Dancarino</option>
				  <option>Camera man</option>
				  <option>Figurinista</option>
				  <option>Cenografo</option>
				  <option>Roteirista</option>
				  <option>Apresentador</option>
				  <option>Parceiros</option>
				  
				  <option>Outros...</option>
				</select>
			
			</div>
		  
		  
		  
		  
		  
          <div class="form-group">
            <label for="exampleInputEmail1">Nome Completo</label>
            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="  " required>
            
          </div>
          
		  
		     <div class="form-group">
            <label for="exampleInputEmail1">Idade</label>
            <input type="text" class="form-control" name="idade" id="idade" aria-describedby="emailHelp" placeholder=""required>
            </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="emailHelp" placeholder="" required>
             </div>
          
          
       
			
			
         
		  
		  <br>
         
          <button type="submit" class="btn btn-primary">Cadastrar</button>
		  <a href="index.php"> <button href="index.php" type="button" class="btn btn-primary">Voltar</button>
		  
        </form>
		   
		</div>
	  </div>
  		
			
	</form>

  

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
