<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="author" content="Markitos Lopez">

	<title>Logueo</title>
	<link rel="icon" href="img/login.ico">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<script src="js/jquery-3.0.0.min.js"></script>

</head>

<body class="">
 	
 	<nav>
      	<div class="nav-wrapper ">
      		<a href="#!" class="brand-logo">@CAMEX</a>
      		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="icon-email">menu</i></a>
             <ul class="right hide-on-med-and-down">                
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Acerca de</a></li>
              </ul>        		
      	</div>
      </nav>

	<div class="container">
		 <div class="row">
		    <br>		 	 
		 	 <div class="col s12 m6">		 	   
		 	 	<div class="card">
		 	 		<div class="card-content">
		 	 			<form action="validar.php" method="post">
		 	 			    <div align="center">
		 	 			    	<img src="img/login2.ico" style="width: 30%; height: 30%;">
		 	 			    </div>		 	 				
		 	 			<br><br>
		 	 			<div class="input-field">
		 	 				<input type="email" name="mail" id="mail" required>
		 	 				<label for="Correo" style="font-size: 25px;">CORREO ELECTRONICO<span class="icon-email" style="margin-left: 30px;"><span class="icon-mail" style="margin-left: 15px;"></span></span></label>
		 	 			</div>
		 	 			<br>
		 	 			<div class="input-field">
		 	 				<input type="password" name="pass" id="pass" required>
		 	 				<label for="pass" style="font-size: 25px;">CONTRASEÑA<span class="icon-key" style="margin-left: 30px; font-size: 28px;"></span></label>
		 	 			</div>	
		 	 			<br><br>
						<div align="right">
						 <button class="btn waves-effect waves-light" type="submit" name="action" style="font-size: 20px;">INGRESAR AL SISTEMA<span class="icon-rocket" style="margin-left: 15px; font-size: 23px;"></span>    					
  						 </button>
						</div>			 	 			
		 	 			</form>	 	 			
		 	 		</div>
		 	 	</div>		 	 
		 	 </div>


		 	 <div class=" col s12 m6">
		 	 	 <div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
      				<img class="activator" src="img/prin.jpg">
    				</div>
    
    			<div class="card-content">
      			<span class="card-title activator grey-text text-darken-4">Acerca de CAMEX <span class="icon-info-with-circle" style="margin-left: 17px;"></span></span>      			
    			</div>
    
    		<div class="card-reveal">
      		<span class="card-title grey-text text-darken-4">Canasta Basica Mexiquense<i class="right">Cerrar</i></span>
      		<p>Descripcion: <br>  la canasta mexiquense es para familias en extrema pobreza</p>
    		</div>
  				</div>            
		 	 </div>
		 </div>		 
	</div>

     <footer class="page-footer nav-wrapper">
          <div class="footer-copyright">
            <div class="container">
            © 2016 Todos los derechos reservados 
            <a class="grey-text text-lighten-4 right" href="#!">DIF</a>
            </div>
          </div>
     </footer>

	
	<script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/materialize.min.js"></script>
      <script type="text/javascript">
      $( document ).ready(function(){

          $(".button-collapse").sideNav();
          $('ul.tabs').tabs();

      })
      </script>
</body>
</html>