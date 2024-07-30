
<?php

session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}

include "../php/conection.php";
$dir = "../assets/img";
  
    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];
    $P = $_POST['id'];
    
$sql = "DELETE FROM product WHERE id =  $P ";
   

if($con->query($sql)){

    $poster = $dir.'/'.$P.'.jpg';

    if(file_exists($poster)) {
        unlink($poster);
        $_SESSION['color'] = "success";
        $_SESSION['msg'] = "Registro eliminado"; 
    };

}else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al eliminar el registro";
}


header('Location: ../pages/lista_products.php');

exit;