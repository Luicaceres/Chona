<?php 

       session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}

print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>La tiendita de Chona</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/fonts/font-awesome.css">
	<link href="../slider/js-image-slider.css" rel="stylesheet">

	<link href="../assets/estilos/estilos.css" rel="stylesheet">
	<link rel="shortcut icon" href="../assets/logo/logo-chona.png">


</head>
<body>

<!--nav class="navbar navbar-expand-lg navbar-light   ">
      
       
            
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNav" aria-controls="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	       <span class="navbar-toggler-icon"></span>
		</button>
       
	<div class="collapse navbar-collapse" id="navbarNav">
	  <ul class="navbar-nav">
	    <li class="nav-item ">
	    	<a class="nav-link color  sd" href="./products.php" style="white">Productos</a>
	    </li>
	    <li class="nav-item ">
	      <a class="nav-link sd color" href="./cart.php" style="white">Carrito</a>
	    </li>
          
	  </ul>
              
         
	</div>
       <a class="navbar-brand" href="./perfil.php" >

       <span class ="h5" style="color:black;">
              Bienvenido <?= $_SESSION['nombre'] ?> <?= $_SESSION['apellido'] ?> 
              </span>
       </a>
       <div >
       <ul class="navbar-nav  cerrarsesion ">
		<li class="nav-item ">
	       <a class="nav-link cerrar btn btn-outline-danger color " href="../php/cerrar_sesion.php" >Cerrar Sesion</a>
	       </li>
              </ul> 
       </div>
                

</nav-->
<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    
	<a class="navbar-brand" href="inicio.php"><img src="../assets/logo/logo-chona.png" width="30px" height="30px" class="d-inline-block align-top">
	<span style="color:white;  font-family: MV boli;">La tiendita de Chona</span>
	</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
	  <?php
	  		
			if($_SESSION['usu'] ==='0'){
			echo ' <li class="nav-item">
				 <a class="nav-link color  sd " aria-current="page" href="./products.php" style="white">Productos</a>
       			 </li>';

			}else{
				echo ' <li class="nav-item">
				 <a class="nav-link color  sd " aria-current="page" href="./lista_products.php" style="white">Lista de productos</a>
       			 </li>';

			};
		?>
       
        
		<?php
			if($_SESSION['usu'] ==='0'){
			echo ' <li class="nav-item">
		 	 <a class="nav-link sd color" href="./cart.php" style="white">Carrito</a>
       			 </li>';

			};
		?>
       
		
		</ul>
			<ul class="navbar-nav   navbar-nav-scroll ">
				
				<li class="nav-item  ">
					<a class="nav-link" href="./perfil.php" style="white"> 
						<span class ="h5" style="color:black;">
							Bienvenido <?= $_SESSION['nombre'] ?> <?= $_SESSION['apellido'] ?> 
						</span>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link cerrar btn btn-outline-danger color " href="../php/cerrar_sesion.php" >Cerrar Sesion</a>
				</li>
				
			</ul>
	   
		
    </div>
  </div>
</nav>



<div class="container" style="background: #F8F9E4;">

                
                <div id="carrito" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carrito" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carrito" data-bs-slide-to="1" aria-label="Slide 2"></button>
       
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" ata-bs-interval="5000">
                    <img src="../assets/img/verduras.jpg" class="d-block w-100" >
                    </div>
                    <div class="carousel-item" ata-bs-interval="5000">
                    <img src="../assets/img/carrito_de_compras.png" class="d-block w-100" >
                    </div>
                    
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carrito" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carrito" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
                </div>
    <hr>
		<p>Diseñada Por <a href="https://www.facebook.com/66shadow66" target="_blank">Luis Caceres</a></p>
		
</div>


<!-- DIVS QUE SE REFERENCIAN EN EL ALT DE LAS IMG -->
	<div style="display: none;">
		<div id="cap1">
			Bienvenido a la <a href="http://www.google.com/">tiendita de Chona</a>.
		</div>
	</div>

<script src="../assets/bootstrap/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
<script src="../slider/js-image-slider.js"></script>

</body>
</html>