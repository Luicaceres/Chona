<?php

session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}
include "../php/conection.php";
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Telefono = $_POST['Telefono'];
    $Ubicacion = $_POST['Ubicacion'];
    $Email = $_POST['Email'];
    $P = $_POST['id'];

   // $imagen = $_POST['imagen'];
  
    
$sql = "UPDATE usuarios SET  Nombre = '$Nombre', Apellido = '$Apellido', NumTelf = '$Telefono', Email = '$Email', Zona = '$Ubicacion' WHERE ID = $P ;
";
   
    echo $sql ;
   if($con->query($sql)){

             $_SESSION['color'] = "success";
            $_SESSION['msg'] = "Registro Editado";
    }
    else{ 
        $_SESSION['color'] = "danger";
        $_SESSION['msg'] = "";

    }

    header('Location: ../pages/perfil.php');

exit;