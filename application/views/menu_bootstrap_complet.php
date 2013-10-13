<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('includes.txt'); ?>



  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	


   <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;

      }


      
    </style>

</head>
<body>


<!-- AQUI TENIM EL NAVBAR O BARRA SUPERIOR DEL WEBSITE 
	###########################################################################-->


<div class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
        	<div class="navbar-header">
        	<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        </button>
          		<a class="navbar-brand" href="#"><span style="color:green">Intranet Estarlich</span></a>
          	</div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inici</a></li>
              <li><a href="#">Registre Nou</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opcions <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Editar Usuari</a></li>
                  <li><a href="#">Contrasenya</a></li>
                  <li><a href="#">Imatge</a></li>
                  <li class="divider"></li>
                  <li class="nav-header"><b>Usuari Registrat</b></li>
                  <li><a href="#">Perfil</a></li>
                  <li><a href="#">Permisos</a></li>
                </ul>
              </li>
              </ul>
              
               <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
           </div>
    </div>
</div>


<!-- ################################# END NAVBAR ##########################################-->
<!-- ################################# START LEFT NAVBAR ##########################################-->
<div class="container-fluid ">
    <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Administrador</li>
              <li class="active"><a href="#">Administraci&oacute; D'Usuaris</a></li>
              <li><a href="list_user">Llistar Usuaris</a></li>
              <li><a href="create">Crear Usuaris</a></li>
              <li><a href="update">Modificar</a></li>
              <li class="nav-header">Configuraci&oacute; D'Usuaris</li>
              <li><a href="#">Canviar Paraula de pas </a></li>
              <li><a href="#">Desconectar</a></li>
            </ul>
          </div>
        </div>
   
	       

<!-- ################################# END LEFT NAVBAR ##########################################-->
<!-- ################################# Start's BODYWEB, CONTAINER OF CENTER AND RIGHT, THAT'S AMAZING!############################-->
	
  	<div class="span10">
	    	<div class="hero-unit">
		    		<h1>Intranet </h1>
		    			<p>Tagline</p>
		    			<p>
		    			<a class="btn btn-primary btn-large">
		    			Learn more
		    			</a>
		    			</p>
    		</div>
	 </div>
  
		
		
</div>

	
<hr>
	<footer>
<p align="center">&copy;Estarlich Company 2013</p>
</footer>
</div>


</body>
</html>

