<?php

session_start();
include "../php/conection.php";

if(!isset($_SESSION['loggedin'])) {

    print_r($_SESSION);

    if(isset($_POST['Enviar'])) {
        $nombre = $_POST['Nombre'];
        $apellido =  $_POST['Apellido'];      
        $numtlf = $_POST['Numtlf'];
        $zona =  $_POST['Zona'];
        $email = $_POST['Email'];
        $contr = $_POST['Contraseña'];
        $r = 0;
                
    };
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

            <nav class="navbar navbar-expand-lg bg-warning">
                <div class="container-fluid ">
                
                <a class="navbar-brand" href="inicio.php"><img src="../assets/logo/logo-chona.png" width="30px" height="30px" class="d-inline-block align-top">
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
        
        <div class = "container text-center m-auto d-flex form-registro w-500 m-auto">

            <form class= "mt-5" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                
                <div class="mb-3 row align-items-end">
                    <div class="col col-sm-6 ">

                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="Nombre"
                        value="<?php if(isset($nombre)) ?>">
                    </div>
                    <div class="col col-sm-6 ">

                        <label for="Apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="Apellido" placeholder="Apellido" name="Apellido" value="<?php if(isset($apellido)) ?>">
                        
                    </div>
                    <div class="col col-sm-3 mt-3 ">

                        <label for="Numtlf" class="form-label">Numero de telefono</label>
                        <input type="text" class="form-control" id="Numtlf" placeholder="0000000" name="Numtlf" value="<?php if(isset($numtlf)) ?>">

                    </div>
                    <div class="col col-sm-9 ">

                        <label for="Zona" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="Zona" placeholder="Av. Ppal Calle-1" name="Zona" value="<?php if(isset($zona)) ?>">

                    </div>

                    <div class="col col-sm-12 mt-3">

                        <label for="Email" class="form-label">Direccion de correo Electronico</label>
                        <input type="text" class="form-control" id="Email" placeholder="Nombre@gmail.com" name="Email" value="<?php if(isset($email)) ?>">

                    </div>

                    <div class="col col-sm-8 mt-3 ">
                    <label for="Contraseña" class="form-label">Contraseña</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="Contraseña">
                    <div id="passwordHelpBlock" class="form-text">
                        Tu contraseña debe contener entre 8 y 20 caracteres y numeros, no debe contener espacios, caracteres especiales o algun emoji.
                    </div>

                    </div>

                    <div class="col col-sm-3 m-auto">
                    <button class="btn btn-primary w-100 py-2" type="submit" name="Enviar">Enviar</button>
                    </div>
                    
                    <?php
                        include("../php/validarformulario.php")
                    ?>
                    

                </div>


            </form>
            
            
        </div>
    </body> 



<script src="../bootstrap/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script src="../slider/js-image-slider.js"></script>
    
    <?php }
else { print_r($_SESSION);
    
    header('Location: ./inicio.php'); 
    
exit;
}
 ?>

    


















































