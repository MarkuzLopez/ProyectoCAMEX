<!DOCTYPE html>
<?php 
	session_start();	
	if (@!$_SESSION['user']) {
	header("location:logueo.php");
	}
 ?>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    
  <meta name="author" content="Markitos Lopez">
	<title>Principal</title>
	<link rel="icon" href="img/port.png">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/materialize.css">
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/botones.js"></script>
</head>
<body>
    <div class="navbar-fixed">    	
      <nav>        
      	<div class="nav-wrapper">
      		<a href="#" class="brand-logo">@CAMEX</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="icon-email">menu</i></a>                  
      		<ul class="right hide-on-med-and-down">
      			<li ><a href="#" onclick="Botonprincipal()" style="font-size: 20px;">PRINCIPAL<span class="icon-home" style="margin-left: 15px; font-size: 20px;"></span></a></li>
      			 <li><a class="dropdown-button" href="#!" data-activates="dropdown1" style="font-size: 20px;">REGISTRAR <span class="icon-folder" style="font-size: 20px; margin-left: 15px;"></span></a>
      				<ul id="dropdown1" class="dropdown-content">
  					   <li><a href="#!" onclick="BotonFormularios()">SOLICITUDES<span class="icon-users" style="margin-left: 10px; font-size: 20px;"></span></a></li>  		
  					   <li class="divider"></li>
  					   <li><a href="#modal1">PUEBLOS<span class="icon-direction" style="margin-left: 10px; font-size: 25px;"></span></a></li>  		 
					    </ul>
      			</li>  
      			<li><a href="#" onclick="BotonConsultas()" style="font-size: 20px;">CONSULTAR DATOS <span class="icon-database" style="margin-left: 15px; font-size: 20px;"></span></a></li>      			      		
      			<li><a href="desconectar.php" style="font-size: 20px;">CERRAR SESSION<span class="icon-circle-with-minus" style="margin-left: 15px; font-size: 23px;"></span></a></li>
      		</ul>         
        </div>
			 </div>  

            <ul class="side-nav" id="mobile-demo">
              <li><a href="#" onclick="Botonprincipal()">Principal</a></li>
              <li><a href="#" onclick="BotonFormularios()">Registar</a></li>
              <li><a href="#" onclick="BotonConsultas()">Consultar</a></li>
              <li><a href="desconectar.php">Cerrar Session</a></li>

              <li><a href="cerrarSesion.php">Salir</a></li>
            </ul>     
      </nav>
  
            
      <div class="container">
      	 <div class="row">
      	 <div >
         <br>
      	 	 <div class="card-panel teal">
                  <span class="white-text">
                     <h5>Hola Bienvenido(a):  <?php echo strtoupper($_SESSION['user']); ?></h5>
                  </span>
            </div>
      	</div>

      	 <div id="modal1" class="modal">
          		<div class="modal-content">
           		<br><br>
           		<div class="row">
          		<div class="input-field col s6">          		
            	<form action="#" method="post">            	
            	<input type="text" name="pueblo" id="pueblo" style="text-transform: uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            	<label for="pueblo" style="font-size: 25px;">Nombre del Pueblo<span class="icon-clipboard" style="margin-left: 15px;"></span></label>
            	<BR><BR><BR>
            <button class="btn waves-effect waves-light" type="submit" name="action" style="font-size: 20px;">
				GUARDAR PUEBLO<span class="icon-save" style="margin-left: 15px; font-size: 25px;"></span>  
  				</button>
                </form>
          		</div> 
         		 </div>
        		</div>
        		<div class="modal-footer">
        		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" style="font-size: 20px;">CERRAR VENTANA</a>        
      			</div>	
      	  </div>      	 
      	 	
          <div id="principal" style="display: none;">
      	 		<div class="row">
      	 			<div class="col s12">
      	 				<h1>Contenido Principal.</h1>
      	 			</div>
      	 		</div>
      	 	</div>
      	 	
          <div id="formularios" style="display: none;">
      	 		<?php require_once "formulario.php" ?>
      	 	</div>

      	 	<div id="consultas" style="display: none;">
      	 		<?php  require_once "consultas.php" ?>
      	 	</div>

      	 </div>
      </div>

      
	
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/materialize.min.js"></script>

    <script>
  	$(document).ready(function(){
    
    $('select').material_select();
    $('.datepicker').pickadate();
      $(".button-collapse").sideNav();
          $('ul.tabs').tabs();

      $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
       $('.dropdown-button').dropdown('open');
       $('.dropdown-button').dropdown('close');       

    $('.modal').modal();
    $('#modal1').modal('open');
    $('#modal1').modal('close');

 		 });
  	</script>
    
</body>
</html>