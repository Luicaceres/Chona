<?php 

       session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}



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



<div class="container" style="background: #F8F9E4; height: 91vh">
	<div class="row">
		<div class="col-lg-12">
		
				<div id="sliderFrame" style="margin-top: 10px;">
					
					<div id="slider">
						<a href="" target="_blank"><img src="../assets/img/verduras.jpg" alt="#cap1" /></a>
						
						<img src="../assets/img/carrito_de_compras_.png" class="img-rounded" alt="Verduras y hortalizas" width="304" height="236"> 

					</div>

				</div>

		</div>
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