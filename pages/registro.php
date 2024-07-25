<?php


       session_start();

if(!isset($_SESSION['loggedin'])) {

    print_r($_SESSION);
    ?>

 
<!DOCTYPE html>
<html>
<head>
	<title>La tiendita de Chona</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/fonts/font-awesome.css">
	<link href="../slider/js-image-slider.css" rel="stylesheet">

	<link href="../assets/estilos/estilos.css" rel="stylesheet">
    <link href="../assets/estilos/sign-in.css" rel="stylesheet">
	<link rel="shortcut icon" href="../assets/logo/logo-chona.png">


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning  ">
      
       <a class="navbar-brand" href="inicio.php"><img src="../assets/logo/logo-chona.png" width="30px" height="30px" class="d-inline-block align-top">
              <span style="color:white;  font-family: MV boli;">La tiendita de Chona</span>
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	       <span class="navbar-toggler-icon"></span>
	</button>
       
	
</nav>
  
<div class = "container">

   <form class= "mt-5" action="" method="post">

   

       
       <div class="input-group col-15 col-form-label mb-3  ">
           <span class="input-group-text" id="basic-addon1">Nombre</span>
           <input type="text" class="form-control" placeholder="Nombre" aria-label="Name" aria-describedby="basic-addon1" name= "nombre">

           
           <span class="input-group-text ml-1" id="basic-addon1">Apellido</span>
            <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" aria-describedby="basic-addon1">
           
           
        </div>
        
        
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Numero de Telefono</span>
            <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1">
        </div>
        
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        
    










   </form>
    
    
</div>
    
    
    <?php }
else { print_r($_SESSION);
    
    header('Location: ./inicio.php'); 
    
exit;
}
 ?>

    


















































