<?php

session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}

include "../php/conection.php";

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

 <hr>
<?php if (isset($_SESSION['msg']) && isset($_SESSION['color'])) { ?>
            <div class="alert alert-<?= $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['msg']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php
            unset($_SESSION['color']);
            unset($_SESSION['msg']);
        } ?>

<div class="table-responsive"  >
	<div class="row" >
		<div class="col-md-12 mt-5 ">
                     

           
		<h2>Perfil</h2>
			
			
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from usuarios where ID  = $_SESSION[id]");
?>

 
<!-- table-sm table-striped table-bordered table-condensed table-hover h5 -->
<table class="table table-hover table-sm table-condensed  table-bordered table-responsive  h5"  >
<thead class="table-info ">
	<th scope="row">Nombre</th>
	<th scope="row" >Telefono</th>
	<th scope="row">Email</th>
	<th scope="row">Ubicacion</th>
	<th scope="row">Accion</th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/

while($r=$products->fetch_object()):;


$R_ID = $r->ID;
//$R_PR = $r->price;
//$R_PD = $r->name;




?>
<tr>

	<!--td ><?php //echo $r->ID;?></td-->
	<!--td> <img src= "<?php //echo $dir . $R_ID; ?>.jpg" width="100px">  </td--> 
	<td ><?php echo $r->Nombre .' '. $r->Apellido ;?></td>
	<td>0<?php echo $r->NumTelf; ?></td>
	<td><?php echo $r->Email; ?></td>
	<td><?php echo $r->Zona; ?></td>
	<td> <a href="#" class="btn btn-sm btn-warning" name ="Cambiar" data-bs-toggle="modal" data-bs-target="#editarperfilModal" data-bs-id="<?php echo $R_ID ;?>"><i class="fa fa-plus-circle"></i> Editar </a>
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
       
       include "./editarPerfilModal.php";
	
?>


<script>
      
        let editarperfilModal = document.getElementById('editarperfilModal')
		
       
      

			editarperfilModal.addEventListener('shown.bs.modal', event => {
				let button = event.relatedTarget
				let id = button.getAttribute('data-bs-id')

				let inputId = editarperfilModal.querySelector('.modal-body #id')
				let inputNombre = editarperfilModal.querySelector('.modal-body #Nombre')
				let inputApellido = editarperfilModal.querySelector('.modal-body #Apellido')
				let inputTelefono = editarperfilModal.querySelector('.modal-body #Telefono')
				let inputEmail = editarperfilModal.querySelector('.modal-body #Email')
				let inputZona = editarperfilModal.querySelector('.modal-body #Ubicacion')

				

				let url = "../php/getperfil.php"
				let formData = new FormData()
				formData.append('id', id)

				fetch(url, {
						method: "POST",
						body: formData
					}).then(response => response.json())
					.then(data => {

						inputId.value = data.ID
						inputNombre.value  = data.Nombre
						inputApellido.value =  data.Apellido
						inputTelefono.value = data.NumTelf
						inputEmail.value  =  data.Email
						inputZona.value  =  data.Zona
					}).catch(err => console.log(err))

			})


    </script>


<script src="../bootstrap/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script src="../slider/js-image-slider.js"></script>

</body>
</html>