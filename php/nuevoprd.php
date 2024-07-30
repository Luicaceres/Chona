<?php

session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}

include "../php/conection.php";
   

    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];
   $dir = "../assets/img/";
    
$sql = "INSERT INTO product (name, price) VALUES('$Producto',$Precio)";
    
   if($con->query($sql)){

        $id= $con->insert_id;
        $_SESSION['color'] = "success";
        $_SESSION['msg'] = "Nuevo registro agregado";


        if ($_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
            $permitidos = array("image/jpg", "image/jpeg");
            if (in_array($_FILES['imagen']['type'], $permitidos)) {
    
                print_r($_FILES);
    
                $info_img = pathinfo($_FILES['imagen']['name']);
                $info_img['extension'];
    
                $poster = $dir.'/'.$id.'.jpg';

                $_SESSION["dir"] = $dir;
                $_SESSION["prueba"] = $poster;
    
                if (!file_exists($dir)) {
                    mkdir($dir, 0777);
                }
    
                if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $poster)) {
                    $_SESSION['color'] = "danger";
                    $_SESSION['msg'] .= "<br>Error al guardar imagen";
                    
                }
            } else {
                $_SESSION['color'] = "danger";
                $_SESSION['msg'] .= "<br>Formato de imágen no permitido";
               
            }
        }
    } else {
        $_SESSION['color'] = "danger";
        $_SESSION['msg'] = "Error al guarda imágen";
    }
    header('Location: ../pages/lista_products.php');

exit;