<?php
session_start();

if (isset($_SESSION["cadastro_concluido"])) {

  header("Location: #openModal");

}

?>

<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ACAFI</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">


</head>

<body id="page-top">


<div id="openModal" style = "display:nome" class="modalDialog">
          <div class="alert alert-success alert-dismissable">
              <a href="#close" title="Close" class="close">X</a>
              <h2>Alerta!</h2>
              <p><b><?php if(isset($_COOKIE['cookie'])){echo $_COOKIE['cookie'];}?></b> cadastrado(a) com sucesso!</p>
          </div>
   </div>


<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">HOME</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index2.php">Cadastre-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Videos e Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
			
		  </li>
		  
		  <li class="nav-item">
		    
            <a class="nav-link js-scroll-trigger" href="login.php">Cadastrados</a>
			
          </li>
		  
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">ACAFI</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Associação dos catireiros e foliões de Iporá-GO</p>
          <a class="btn-primary btn-xl js-scroll-trigger" href="#about">Saiba mais</a>
           
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">A catira é uma dança do folclore brasileiro, em que o ritmo musical é marcado pela batida dos pés e mãos dos dançarinos</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Para ilustrar melhor esta categoria, listam-se as seguintes atividades, que configuram os principais profissionais de uma produção artística: cenografia (cenógrafo); elaboração de roteiros (roteirista); efeitos especiais; apresentação de programas televisivos e radiofônicos (apresentadores); espetáculos pirotécnicos e de fogos de artifício; operações de câmera (câmeras e diretores); montagem de figurinos (figurinista); serviços auxiliares das atividades artísticas; além da produção geral de eventos não especificados (produtores). Estes serviços são procurados por empresas ou pessoas interessadas em produzir alguma peça ou atividade artística - por exemplo: uma empresa que deseja produzir um espetáculo para comemorar seus resultados anuais.<br> CNPJ: 05.138.107/0001-14</p>
          <a class="btn-light btn-xl js-scroll-trigger" href="index2.php">Faça parte dessa Cultura você também</a>
        </div>
      </div>
    </div>
  </section>

 

  

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
             
              <div class="project-name">
                Romaria a nossa senhora Auxiliadora
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
             
              <div class="project-name">
                Lançamento do Livro Folia dos lourenço
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
             
              <div class="project-name">
                3º missa sertaneja da ACAFI
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              
              <div class="project-name">
                Primeira festa da ACAFI
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              
              <div class="project-name">
                Amostra cultural 2014
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              
              <div class="project-name">
                Ultima edição Goias gira arte
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
	
 <div class="container-fluid p-0">
  <div class="row no-gutters">
	
	 <div class="col-lg-4 col-sm-6">
          <iframe width="510" height="265" src="https://www.youtube.com/embed/2K-GReks_Q0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        
        <div class="col-lg-4 col-sm-6">
         <iframe width="510" height="265" src="https://www.youtube.com/embed/2DUD5io9ayM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        
        
        
        
        <div class="col-lg-4 col-sm-6">
          <iframe width="510" height="265" src="https://www.youtube.com/embed/jr2wFa1XsMM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section 
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section>
-->
<br><br><br>
  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Olá!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Está pronto para começar seu próximo projeto conosco? Ligue para nós ou envie-nos um e-mail e entraremos em contato o mais breve possível!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+55 (64) 98166-9266</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="#contato">Enviar email</a>
        </div>
      </div>
    </div>
  </section>
  
  
  
  
  
   <section class="page-section" id="contato">
    <div class="container">
      
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
         
		 <form action ="envia_email_post.php" method = "POST">
		 
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Seu nome</label>
                <input class="form-control" name="Nome" id="Nome" type="text" placeholder="" required="required" data-validation-required-message="Por favor digite seu nome.">
                <p class="help-block text-danger"></p>
              </div>
			 </div>
			
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Seu email</label>
                <input class="form-control" name="Email" id="Email" type="email" placeholder="	" required="required" data-validation-required-message="Por favor digite seu telefone.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Mensagem</label>
                <textarea class="form-control" name="Mensagem" id="Mensagem" rows="5" placeholder="Digite sua mensagem..." required="required" data-validation-required-message="Por favor digite sua mensagem."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn-primary btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


<!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Projeto Integrador</div>
    </div>
  </footer>

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
<?php
unset($_SESSION["cadastro_concluido"]);
?>