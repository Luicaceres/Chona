<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>La tiendita de Chona</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/fonts/font-awesome.css">
	<link href="../slider/js-image-slider.css" rel="stylesheet">

	<link href="../assets/estilos/estilos.css" rel="stylesheet">
	<link rel="shortcut icon" href="../assets/logo/logo-chona.png">


</head>
<body>

<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    
	<a class="navbar-brand" href="index.php"><img src="../assets/logo/logo-chona.png" width="30px" height="30px" class="d-inline-block align-top">
	<span style="color:white;  font-family: MV boli;">La tiendita de Chona</span>
	</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
      <ul class="navbar-nav  my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        
	 	 <li class="nav-item">
		  <a class="nav-link sd btn color " href="./pages/login.php" >Iniciar Sesión</a>
        </li>

		</ul>
    </div>
  </div>
</nav>

 <?php
		if (isset($_GET))
		{
			foreach($_GET as $a => $b)
			echo '<div class="alert alert-success mt-3" role="alert">' .  $b  . ' </div>';
		}
 ?>



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
    
    <script src="../bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script src="../slider/js-image-slider.js"></script>

</body>
</html>