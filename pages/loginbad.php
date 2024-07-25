<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
   <title>Login</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/estilos/sign-in.css" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/logo/logo-chona.png">

</head>



<body >

  

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
		  <a class="navbar-brand" href="./index.php"><img src="../assets/logo/logo-chona.png" width="30px" height="30px" class="d-inline-block align-top"> <span style="color:white;  font-family: MV boli;">La tiendita de Chona</span></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <!--div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		      	<a class="nav-link active sd" href="./products.php" onclick="prueba()" style="white">Productos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link sd" href="./cart.php" style="white">Carrito</a>
		      </li>
		     
		    </ul>
		  </div-->

</nav>
  
  <div class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto   d-flex align-items-center py-4 bg-body-tertiary ">
      <form action= "../php/sesion.php" method="post">
        <div class = "contenedor-img">
          <img class="mb-3" src="../assets/logo/logo-chona.png" alt="" width="102px" height="87px">

          <h1 class="h3 mb-3 fw-normal m-auto">Inicia Seción nueva</h1>
        </div>
        <div class="alert alert-danger" role="alert">
          Credenciales de inicio invalidas
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="imail" name="imail" placeholder="name@example.com" require>
          <label for="imail">Correo Electronico</label>
        </div>
        <div class="form-floating ">
          <input type="password" class="form-control" id="floatingPassword" name="floatingPassword" placeholder="Password" require>
          <label for="floatingPassword">Contraseña</label> 
          
        

        </div>
  
        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Recordar me
          </label>
        </div>
        
        <button class="btn btn-primary w-100 py-2" type="submit">Ingresar</button>
       
      </form>
    </main>
  
  </div>

  
    <script src="../assets/bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
   



</body>

</html>