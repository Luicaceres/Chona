<?php

session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}

include "../php/conection.php";
   

    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];
   // $imagen = $_POST['imagen'];
    
$sql = "INSERT INTO product (name, price) VALUES('$Producto',$Precio)";
    
   if($con->query($sql)){

        $id= $con->insert_id;
    }
    header('Location: ../pages/lista_products.php');

exit;