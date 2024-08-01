<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}

include "../php/conection.php";
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>La Tiendita de Chona</title>
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
        <li class="nav-item">
		  <a class="nav-link color  sd " aria-current="page" href="./products.php" style="white">Productos</a>
        </li>
        <!-- <li class="nav-item">
		  <a class="nav-link sd color" href="./cart.php" style="white">Carrito</a>
        </li> -->
		
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

<div class="container"  style="background: #F8F9E4; height: 91vh">
	<div class="row">
		<div class="col-md-12 h5">
			<hr>
			<h1>Carrito</h1>
			<br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from product");
if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
<table class="table table-hover table-sm table-condensed  table-bordered table-responsive  h5" width="100%">
<thead class="table-info">
	<th>Peso x KG</th>
	<th>Producto</th>
	<th>Precio x KG</th>
	<th>Total</th>
	<th>Accion</th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
foreach($_SESSION["cart"] as $c):
$products = $con->query("select * from product where id=$c[product_id]");
$r = $products->fetch_object();
	?>
<tr>
<th><?php echo $c["q"];?></th>
	<td><?php echo $r->name;?></td>
	<td>$ <?php echo $r->price; ?></td>
	<td>$ <?php echo $c["q"]*$r->price; ?></td>
	<td style="width:260px;">
	<?php
	$found = false;
	foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}
	?>
		<a href="../php/delfromcart.php?id=<?php echo $c["product_id"];?>" class="btn btn-danger"><i class="fa fa-times"></i> Eliminar</a>
	</td>
</tr>
<?php endforeach; ?>
</table>

<form class="form-horizontal" method="post" action="../php/process.php">
<table class="table-sm">
	<tr>
		<td><label for="email" >Email del Cliente</label></td>
		<td><input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Email del cliente" value="<?php echo $_SESSION['email'];?>"></td>
		<td><button type="submit" class="btn btn-success"><img src="../assets/img/tick.png" width="20px" height="20px"> Procesar Venta</button></td>
	</tr>
</table>
 </form>




<?php else:?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
	
	</div>
	<a class="btn btn-outline-danger" href="https://wa.me/584129025204?text=I'm%20inquiring%20about%20the%20apartment%20listing"><img alt="ws" src="../assets/logo/Digital_Glyph_Green.svg" width="100px" /> </a>
	</div>


<?php endif;?>

<br>

<br><hr>



<p>Diseñada Por <a href="https://www.facebook.com/66shadow66" target="_blank">Luis Caceres</a></p>
		</div>
	</div>
</div>

<script src="../assets/bootstrap/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
<script src="../slider/js-image-slider.js"></script>
</body>
</html>