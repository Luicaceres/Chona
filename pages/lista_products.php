<?php

session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}

include "../php/conection.php";
print_r($_SESSION)


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
			if($_SESSION['usu'] ===0){
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
			if($_SESSION['usu'] ===0){
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

<div class="container"  style="height: 100%">
	<div class="row">
		<div class="col-md-12 mt-5 ">
                     

              <div class="espacio"></div>
              <a href="./agregar.php" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#NuevoModal"><i class="fa fa-plus-circle"></i> Agregar</a>
              </div>
              <hr>
		<h2>Productos</h2>
			
			
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from product");
?>

<!-- table-sm table-striped table-bordered table-condensed table-hover h5 -->
<table class="table table-hover table-sm table-condensed  table-bordered table-responsive  h5" table-bordered table-sm  table-condensed table-hover  h5 " width="100%">
<thead class="table-info ">
       <th>ID</th>
	<th>Producto</th>
	<th>Precio</th>
	<th>Accion</th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/

while($r=$products->fetch_object()):;?>

<tr>
       <td ><?php echo $r->id;?></td>
	<td><?php echo $r->name;?></td>
	<td>$ <?php echo $r->price; ?></td>
	<td style="width:245px;">
	<?php
	$found = false;
       
	if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}}
	print_r($found);
	
	?>
	<?php if($found):?>
		<a href="./cart.php" class="btn btn-info">Agregado</a>
	<?php else:?>
	<form class="form-inline" method="post" action="../php/update_prd.php">
		<input type="hidden" name="product_id" value="<?php echo $r->id; ?>">
		<section class="clmbuton">

			
			<div class=" espacio">

                     <a href="./editar.php" class="btn btn-warning" name ="Cambiar" data-bs-toggle="modal" data-bs-target="#editarModal"><i class="fa fa-plus-circle"></i> Cambiar</a>
		       </div>
                     <div class=" espacio">

				<button type="submit" class="btn btn-danger" name = "Desactivar"><i class="fa fa-chain-broken"></i> Desactivar</button>
			</div>
		</section>

		
	</form>	
	<?php endif; ?>
	</td>
</tr>
<?php endwhile; ?>
</table>




</section>

<hr>
<p>Diseñada Por <a href="https://www.facebook.com/66shadow66" target="_blank">Luis Caceres</a></p>

		</div>
	</div>
</div>

<?php
       include "./agregar.php";
       include "./editar.php";
?>


<script src="../bootstrap/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script src="../slider/js-image-slider.js"></script>

</body>
</html>