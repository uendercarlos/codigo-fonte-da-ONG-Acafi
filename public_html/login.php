<?php

session_start();


if (!(isset($_COOKIE['usuario']) && !isset($_COOKIE['senha']))) {

echo '
<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/style.css" rel="stylesheet">

    </head>
  <body>

    <div class="btn-group" >
	   <a class="btn btn-info" href="index.php">
		Voltar
	</a>
							
    </div>
        

        <div id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <h2>Erro</h2>
                <p>Usuário ou senha incorreta! Tente novamente!</p>
            </div>
        </div>
        

        <div id="openModal2" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <h2>Alerta!</h2>
                <p>Sessão finalizada com sucesso!</p>
            </div>
        </div>
        
        
        <div class="container">
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" action="processa_login.php" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" name="usuario" id="inputEmail"  class="form-control" placeholder="Usuário" required autofocus>
                    <input type="password" name="senha" id="inputPassword"  class="form-control" placeholder="Senha" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <!--<input name="check" type="checkbox" value="sim"> Lembrar login-->
                           
                            
                        </label>
                    </div>
                    <button  class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
                </form>
                   
		    </div>
        </div>
        
    </body>
</html>';

        if (isset($_SESSION["invalido"])) {
    
            header("Location: #openModal");
    		
        }
        if (isset($_SESSION["finalizada"])) {
    
            header("Location: #openModal2");
    		
        }

 
} else {
	

    header("Location: index.php");
	
}

unset($_SESSION["finalizada"]);
unset($_SESSION["invalido"]);
?>